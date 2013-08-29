<?php
/*-----------------------------------------------------------
Workspace - Uses DB auth instead of HTTP and flat files

Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 21, 2013
Modifed: August 28, 2013
------------------------------------------------------------*/

require_once 'config/config.php';

class Workspace {
   private $db;

   private $user;
   private $progress;
   private $directory;

   public $upload_requirements;

   /**
    * construct
    */
   public function __construct($user_id = null) {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');

      $this->userObj     = new User();
      $this->progressObj = new Progress();

      $this->upload_requirements = array('_init_'      => 0, // only a sentinel offset
                                         PROGRESSION_1 => 1,
                                         PROGRESSION_2 => 5,
                                         PROGRESSION_3 => 5,
                                         PROGRESSION_4 => 5,
                                         PROGRESSION_5 => 5,
                                         PROGRESSION_6 => 5,
                                         PROGRESSION_7 => 2,
                                         PROGRESSION_8 => 2,
                                         PROGRESSION_9 => 5);
   }

   /**
    * upload files
    *
    * @param: (int) user_id
    * @param: (array) $_FILES
    * @return: (mixed)
    */
   public function uploadFile($user_id, $_Files) {
      if ($_Files['fileupload']['error'])
         return false;

      // allowed extensions
      $allowed = array('html', 'htm');
      $ext = pathinfo($_Files['fileupload']['name'], PATHINFO_EXTENSION);

      if (!in_array($ext, $allowed)) {
         $this->logger->log('Workspace::uploadFile() BAD EXTENSION', Zend_Log::INFO);
         return false;
      }

      try {
         // fixme: input sanitization!! (check ext and/or filetype at least)
         $dir = $this->getDirectory($user_id); //echo "\ndir: $dir";
         move_uploaded_file($_Files['fileupload']['tmp_name'], "$dir/" . trim($_Files['fileupload']['name']));

         // track number of files uploaded
         $authNamespace = new Zend_Session_Namespace('Zend_Auth');
         $authNamespace->num_files_uploaded += 1;

         // log
         $this->logger->log('Workspace::uploadFile() FILE UPLOADED', Zend_Log::INFO);

         return true;
      } catch (Exception $e) {
         $this->logger->log('Workspace::uploadFile() FILE UPLOAD ERROR', Zend_Log::ERR);
         return $false; 
      }
   }

   /**
    * reset uploaded file number
    */
   public function resetNumFilesUploaded() {
      $authNamespace = new Zend_Session_Namespace('Zend_Auth');
      $authNamespace->num_files_uploaded = 0;
      $this->logger->log('Workspace::resetNumFilesUploaded() SESSION VALUE ' . $authNamespace->num_files_uploaded, Zend_Log::ERR);
   }

   /**
    * determine files needed to continue
    *
    * @param: (int) user_id
    * @return: (int) num files needed
    */
   public function filesNeededToProceed() {
      $authNamespace = new Zend_Session_Namespace('Zend_Auth');
      $num_files_uploaded = $authNamespace->num_files_uploaded;
      $progression = $authNamespace->progress['progression'];

      return $this->upload_requirements[$progression] - $num_files_uploaded;
   }

   /**
    * determine if the minimum number of files have been uploaded
    *
    * @param: (int) user_id
    * @return: (bool) true if met
    */
   public function minFilesUploaded() {
      $authNamespace      = new Zend_Session_Namespace('Zend_Auth');
      $num_files_uploaded = $authNamespace->num_files_uploaded;
      $progression        = $authNamespace->progress['progression'];

      // has the user uploaded enough to progress?
      if ($num_files_uploaded >= $this->upload_requirements[$progression]) {
         $this->logger->log('Workspace::minFilesUploaded() TRUE', Zend_Log::INFO);
         return true;
      }

      return false;
   }

   /**
    * get a user directory
    *
    * @param: (int)
    * @return: (string) directory   
    */
   public function getDirectory($user_id) {
      $userObj = new User();
      $dir     = $userObj->getDirectory($user_id);

      return $dir;
   }

   /**
    * create a user directory
    *
    * @param: (int) user_id
    * @return: (bool) true on success
    */
   public function createDirectory($user_id) {
      try {
         // make dir
         $dir = $this->getDirectory($user_id);
         $result = mkdir($dir, 0755);

         if ($result) {
            // make img dir
            $dir = $dir . '/images';
            mkdir($dir, 0755);

            // copy images
            $base_img_dir = UPLOAD_DIR . '/_base/images';
            $this->recurse_copy($base_img_dir, $dir);
         }

         return $result;
      } catch (Exception $e) {
         $this->logger->log('Workspace::createDirectory() ERROR', Zend_Log::ERR);
      }
   }

   function recurse_copy($src, $dst) { 
      $dir = opendir($src); 
      @mkdir($dst); 

      while (false !== ( $file = readdir($dir)) ) {
         if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($src . '/' . $file) ) {
               recurse_copy($src . '/' . $file,$dst . '/' . $file);
            }
            else {
               copy($src . '/' . $file,$dst . '/' . $file);
            }
         }
      }
      closedir($dir);
   }

   /**
    * get clean email
    */
   public function getCleanEmail($user_id) {
      $userObj = new User();

      $email = $userObj->getField($user_id, 'email');
      $email = str_replace(array('@', '.'), '_', $email);

      return $email;
   }

   /**
    * get workspace data
    */
   public function getWorkspaceData($user_id) {
      try {
         $this->logger->log("Workspace::getWorkspaceData() READING FILES", Zend_Log::INFO);
   
         $i = 0;
         $dir = $this->getDirectory($user_id);

         if ($handle = opendir($dir)) {
            while (($file = readdir($handle)) !== false) {
               if (!in_array($file, array('.', '..')) && !is_dir($dir . '/' . $file)) {
                  $realpath = realpath($dir . '/' . $file);

                  $filedata[$i]['fullpath'] = $realpath;
                  $filedata[$i]['filename'] = basename($file);

                  $size = filesize($realpath);
                  $filedata[$i]['filesize'] = empty($size) ? '--' : $size;

                  $date = filectime($realpath);
                  $filedata[$i]['date']     = empty($date) ? '--' : date("m/d/Y", $date);
                  $filedata[$i]['url']      = 'workspace/' . $this->getCleanEmail($user_id) . "/$file";
                  $i++;
               }
            }
         }

         $this->logger->log("Workspace::getWorkspaceData() FILES READ", Zend_Log::INFO);
         return $filedata;
      } catch (Exception $e) {
         $this->logger->log("Workspace::getWorkspaceData() ERROR", Zend_Log::ERR);

         return false;
      }
   }

   /**
    * delete file
    *
    * @param: (int) path to file
    * @return: (bool) true on success
    */
   public function deleteFile($user_id, $filename) {
      if (strstr($filename, '..') !== false)
         exit('not today...');

      $dir = $this->getDirectory($user_id);
      $filename = $dir . '/' . $filename;

      $this->logger->log("Workspace::deleteFile() DELETING...", Zend_Log::INFO);
      return unlink($filename);
   }

   /**
    * get number of files in user directory
    */
   public function getNumberFiles($user_id) {
      $i = 0; 
      $dir = $this->getDirectory($user_id);

      if ($handle = opendir($dir)) {
          while (($file = readdir($handle)) !== false){
             if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                 $i++;
          }
      }

      return $i;
   }

   /**
    * get all filename in user directory
    */
   public function getFileNames($user_id) {
      $dir = $this->getDirectory($user_id);

      $files = scandir($dir);

      // crude and inefficient, but effective way to remove
      // '.' and '..' from the array
      array_shift($files);
      array_shift($files);

      return $files;
   }

   /**
    * file urls    
    */
   public function getFileUrls($user_id) {
      $files = $this->getFileNames($user_id);
      $clean_email = $this->getCleanEmail($user_id);

      for ($i = 1; $i <= count($files) - 2; $i++) {
         $urls[] = APPLICATION_DOMAIN . "/workspace/$clean_email/" . $files[$i];
      }

      return $urls;
   }
}
