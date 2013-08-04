<?php
/*-----------------------------------------------------------
FileManager - File upload / download manager

Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 4, 2013
Modified: August 4, 2013
------------------------------------------------------------*/

require_once 'config/config.php';

class FileManager {

   /**
    * construct
    */
   public function __construct() {
   }

   /**
    * get all files and folders for a user
    */

   /**
    * upload file to user directory
    *
    * @param: (int) user_id
    * @return: (bool) true on success
    */
   public function uploadFile($user_id) {
      $dir = $this->getDirectory($user_id);
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
