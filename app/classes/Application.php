<?php
/*-----------------------------------------------------------
Application - mainly to consume and adjust application state
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 17, 2013
Modifed: Septempter 7, 2013

construct
------------------------------------------------------------*/
require_once 'config/config.php';

class Application
{
   /**
    * construct
    */
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');
   }

   /**
    * consumeApplicationState - determines next applciation state given
    *    the current ont
    *
    * @param: (string) current application state
    * @return: (string) next application state
    */
   public function consumeApplicationState($application_state = null, $user_id = null) {
      $this->logger->log("Application::consumeApplicationState() START", Zend_Log::INFO);
      $authNamespace = new Zend_Session_Namespace('Zend_Auth');

      // get current application state
      if (is_null($application_state))
         $application_state = $authNamespace->APPLICATION_STATE;

      // determine next application state
      switch ($application_state) {
         case INITIAL_STATE :
            $authNamespace->APPLICATION_STATE = SECONDARY_STATE;            
         break;

         case SECONDARY_STATE :
            $authNamespace->APPLICATION_STATE = TERTIARY_STATE;
         break;
      }

      if (is_numeric($user_id)) {
         $this->logger->log("Application::consumeApplicationState() FIELDS: app_state: $application_state; user_id: $user_id", Zend_Log::INFO);
         $this->db->update('progress', array('application_state' => $application_state + 1), "user_id = $user_id");
      }

      return $authNamespace->APPLICATION_STATE;
   }

   /**
    * setApplicationState - set application to a given state
    *
    * @param: (string) state
    * @return:
    */
   public function setApplicationState($application_state) {
      $authNamespace = new Zend_Session_Namespace('Zend_Auth');
      $authNamespace->APPLICATION_STATE = $application_state;
   }

   /**
    * getApplicationState - get application state (from db)
    *
    * @return: (int) application state
    */
   public function getApplicationState($user_id) {
      try {
         $query = "SELECT `application_state` FROM " . TBL_PROGRESS . " WHERE user_id = ?";
         $result = $this->db->fetchOne($query, $user_id);

         return $result;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);

         return false;
      }
   }

   /**
    * save application state (single application state variable in progress tables)
    *
    * @return: null
    */
   public function saveApplicationState($app_state = null) {

      if (is_null($app_state)) {
         $authNamespace = new Zend_Session_Namespace('Zend_Auth');
         $application_state = $authNamespace->APPLICATION_STATE;
         $user_id           = $authNamespace->storage['user_id'];
      } else {
         $application_state = $app_state;
      }

      $data = array('application_state' => $application_state);

      try {
         $n = $this->db->update(TBL_PROGRESS, $data, "user_id = $user_id"); 
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);
      }
   }

   /**
    * save all relevant application state variables in newly created state table
    *
    * @param: (array)
    */
   public function saveState($data) {
      if (!is_numeric($data['user_id']))
         return;

      $this->logger->log("Application::saveState() SAVING...", Zend_Log::INFO);
      try {
         $query = "SELECT `user_id` FROM `app_state` WHERE user_id = ?";
         $user_id = $this->db->fetchOne($query, $data['user_id']);

         $var = print_r($data, true);
         if (is_numeric($user_id)) {
            $n = $this->db->update('app_state', $data, "user_id = $user_id");
            $this->logger->log("Application::saveState() SAVING...UPDATING $var", Zend_Log::INFO);
         } else {
            $this->db->insert('app_state', $data);
            $this->logger->log("Application::saveState() SAVING...INSERTING $var", Zend_Log::INFO);
         }
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);
      }
   }

   /**
    * get arbitrary field
    *
    * @param: (int) user_id,
    * @param: (string) field name
    * @return: (mixed) field value
    */
   public function getField($field, $user_id) {
      try {
         $query = "SELECT `$field` FROM app_state WHERE user_id = ?";
         $result = $this->db->fetchOne($query, $user_id);

         return $result;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);

         return false;
      }
   }
}




