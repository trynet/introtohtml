<?php
/*-----------------------------------------------------------
Progress class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 4, 2013

construct
array getProgress(int)
bool setProgress(int, array)
------------------------------------------------------------*/

require_once 'config/config.php';

class Progress {
   private $db;

   protected $user_id;
   protected $current_lesson;
   protected $current_lab;
   protected $current_appendix;
   protected $proceed;

   /**
    * construct
    */
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');
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
   public function setProgress($user_id, $data = null) {
      $this->logger->log("Progress::setProgress - USER_ID = $user_id", Zend_Log::INFO);

      if (is_array($this->getProgress($user_id))) {
$this->logger->log("Progress:setProgress - test TRUE", Zend_Log::INFO);
         // update
         // todo: improve this....
         try {
            if (is_null($data)) {
               $current_progress = $this->getProgress($user_id);
               $current_progress['current_lesson']   += 1;
               $current_progress['current_lab']      += 1;
               $current_progress['current_appendix'] += 1;
               $current_progress['proceed'] = 0;

               $n = $this->db->update(TBL_PROGRESS, $current_progress, "user_id = $user_id");
            } else {
               $n = $this->db->update(TBL_PROGRESS, $data, "user_id = $user_id");
            }
$this->logger->log("Progress:setProgress - UPDATED = $n", Zend_Log::INFO);
            $authNamespace = new Zend_Session_Namespace('Zend_Auth');
            $authNamespace->progress = $this->getProgress($user_id);

            return $n;
         } catch (Exception $e) {
            $dbLoggerObj = new DbLogger($e);
            $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);
            return false;
         }
      } else {
$this->logger->log("Progress:setProgress - test FALSE", Zend_Log::INFO);
         // insert (user just created)
         if (is_null($data)) {
            $data = array('user_id' => $user_id,
                          'current_lesson'   => 1,
                          'current_lab'      => 1,
                          'current_appendix' => 1,
                          'proceed'          => 1);
         }

         try {
            $this->db->insert(TBL_PROGRESS, $data);
            $id = $this->db->lastInsertId();

            return $id;
         } catch (Exception $e) {
            $dbLoggerObj = new DbLogger($e);
            $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);
            return false;
         }
      } 
   }
}
