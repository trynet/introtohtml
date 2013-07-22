<?php
/*-----------------------------------------------------------
Registration class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 21, 2013
Modified: July 21, 2013

construct()
------------------------------------------------------------*/

require_once 'config/config.php';

class Registration extends User {
   private $db;

   /**
    * construct
    */
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');
   }

   /**
    * register user
    *
    * @param: (array) data
    * @param: (int) user_id
    * @return: (bool) true on success
    */
   public function registerUser($data, $user_id) {
      try {
         $n = $this->db->update(TBL_USER, $data, "user_id = $user_id");
         return true;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);
         return false;
      }
   }

   /**
    * update usertype
    */
   public function updateUserType($usertype, $user_id) {
      try {
         $n = $this->db->update(TBL_USER, array('usertype' => $usertype), "user_id = $user_id");
         return $n;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);
         return false;
      }
   }
}
