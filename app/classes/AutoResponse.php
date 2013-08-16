<?php
/*-----------------------------------------------------------
Auto Response class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 7, 2013
Modified: August 15, 2013

construct
string generateMessage(int, int, array)
bool sendMessage(string, string, string)
------------------------------------------------------------*/

require_once 'config/config/php';

class AutoResponse
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
    * generate an auto-response message
    *
    * @param: (int) message_id
    * @param: (int) user_id
    * @param: (array) params
    * @return: (string) message
    * @throws: --
    */
   public function generateMessage($message_id, $user_id, $params) {
   }

   /**
    * send message
    *
    * @param: (string) to
    * @param: (string) subject
    * @param: (string) message
    * @return: (bool) true on success
    */
   public function sendMessage($to, $subject, $message) {
      try {
      } catch (Exception $e) {
      }
   }

   /**
    * get message
    *
    * @param: (int) message_id
    * @return: (string) message (w/o parameters)
    *
    public function getMessage($message_id) {
      try {
      } catch (Exception $e) {
      }
   }*/
}
