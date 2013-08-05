<?php
/*-----------------------------------------------------------
Workspace - Uses DB auth instead of HTTP and flat files

Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 21, 2013
Modifed: July 21, 2013
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

      // todo: input sanitization!!
      $dir = $this->getDirectory($user_id); echo "\ndir: $dir";
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
      $dir = $userObj->getDirectory($user_id);

      return $dir;
   }
}
