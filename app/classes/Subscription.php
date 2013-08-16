<?php
/*-----------------------------------------------------------
Subscription class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 16, 2013
Modified: August 16, 2013

construct
------------------------------------------------------------*/

require_once 'config/config.php';

class Subscription
{
   private $db;

   /**
    * construct
    */
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');
   }

   /**
    * update user subscription data
    */
   public function updateSubscription($user_id, $data) {
      if ($data['subscribe'] != '')
         $data['subscribe'] = 1;

      if ($data['html'] != '')
         $data['html'] = 1;

      if ($data['css'] != '')
         $data['css'] = 1;

      if ($data['wordpress'] != '')
         $data['wordpress'] = 1;

      try {
         $n = $this->db->update(TBL_USER, $data, "user_id = $user_id");
         return true;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);

         return false;
      }
   }
}
