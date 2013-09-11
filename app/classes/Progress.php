<?php
/*-----------------------------------------------------------
Progress class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 17, 2013

construct
array getProgress(int)
bool setProgress(int, array)
------------------------------------------------------------*/

require_once 'config/config.php';

class Progress {
   private $db;

   protected $user_id;
   protected $progression;
   protected $proceed;

   /**
    * construct
    */
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');
   }

   /**
    * addProgress - create a new Progress entry for a new user
    *
    * @param: (int) user_id
    * @return: (bool) true on success
    */
   public function addProgress($user_id, $promocode = null) {
      try {
         // determine where this user starts
         $progression = PROGRESSION_1;
         if ($promocode == PROMO_FIT)
            $progression = PROGRESSION_7;
         if ($promocode == PROMO_CLASSROOM)
            $progression = PROGRESSION_10;

         $data = array('user_id'     => $user_id,
                       'progression' => $progression,
                       'proceed'     => 1);

         $this->db->insert(TBL_PROGRESS, $data);

         return true;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);

         return false;
      }
   }

   /**
    * getProgress
    *
    * @param: (int) user id
    * @return: (array) progress
    */
   public function getProgress($user_id) {
      try {
         $query = "SELECT * FROM " . TBL_PROGRESS . " WHERE user_id = ?";
         $result = $this->db->fetchRow($query, $user_id);

         return $result;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);

         return false;
      }
   }

   /**
    * set progress
    *
    * @param: (int) user_id
    * @return: (bool) true on success
    */
   public function setProgress($user_id, $data) {
      $this->logger->log("Progress::setProgress() USER_ID = $user_id", Zend_Log::INFO);

      try {
         $n = $this->db->update(TBL_PROGRESS, $data, "user_id = $user_id");
         $datastr = print_r($data, true);
         $this->logger->log("Progress::setProgress() DATA = $datastr", Zend_Log::INFO);

         // update session namespace
         $authNamespace = new Zend_Session_Namespace('Zend_Auth');
         $authNamespace->progress = $this->getProgress($user_id);

         $this->logger->log("Progress::setProgress() UPDATED = $n", Zend_Log::INFO);

         return $n;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);

         return false;
      }
   }

   /**
    * get arbitrary field
    *
    * @param: (int) user_id,
    * @param: (string) field name
    * @return: (mixed) field value
    */
   public function getField($user_id, $field) {
      try {
         $query = "SELECT `$field` FROM " . TBL_PROGRESS . " WHERE user_id = ?";
         $result = $this->db->fetchOne($query, $user_id);

         return $result;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);

         return false;
      }
   }
}
