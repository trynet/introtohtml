<?php
/*-----------------------------------------------------------
Workspace - Uses DB auth instead of HTTP and flat files

Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 21, 2013
Modifed: August 17, 2013
------------------------------------------------------------*/

require_once 'config/config.php';

class Workspace {
   private $db;

   private $user;
   private $progress;
   private $directory;

   /**
    * construct
    */
   public function __construct($user_id = null) {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');

      $this->userObj     = new User();
      $this->progressObj = new Progress();
   }

   /**
    * upload files
    *
    * @param: (int) user_id
    * @param: (array) $_FILES
    * @return: (bool)
    */
   public function uploadFile($user_id, $_Files) {
      if ($_Files['fileupload']['error'])
         return false;

      // fixme: input sanitization!!
      $dir = $this->getDirectory($user_id); //echo "\ndir: $dir";
      return move_uploaded_file($_Files['fileupload']['tmp_name'], "$dir/" . trim($_Files['fileupload']['name']));
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
    * get clean email
    */
   public function getCleanEmail($user_id) {
      $userObj = new User();

      $email = $userObj->getField($user_id, 'email');
      $email = str_replace(array('@', '.'), '_', $email);

      return $email;
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
      return $files;
   }

   /**
    * file urls    
    */
   public function getFileUrls($user_id) {
      $files = $this->getFileNames($user_id);
      $clean_email = $this->getCleanEmail($user_id);

      for ($i = 1; $i <= count($files) - 2; $i++) {
         $urls[] = "http://dev.introtohtml.net/workspace/$clean_email/" . $files[$i];
      }

      return $urls;
   }
}
