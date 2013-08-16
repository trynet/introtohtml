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

require_once 'config/config.php';

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
    * @return: (bool) true if message successfuly constructed and sent
    */
   public function generateMessage($message_id, $user_id, $params = null) {
      try {
         $message   = '';                               // defined in $file
         $subject   = '';                               // defined in $file
         $signature = "Bud Kraus<br>\n" .               // used in $file
                      "New York City Web Design Instructor<br>\n" .
                      "Joy Of Code<br>\n" .
                      "www.joyofcode.com<br>\n" .
                      "973 479 2914<br><br>\n\n" .

                      "Learn HTML, CSS and WordPress Online With Me";

         // get user data
         $userObj   = new User();
         $firstname = $userObj->getField($user_id, 'firstname');
         $email     = $userObj->getField($user_id, 'email');

         // get message from db, filesystem, define $message in $file and require
         $query  = "SELECT `filename` FROM autoresponse WHERE `autoresponse_id` = ?";
         $result = $this->db->fetchOne($query, $message_id);
         $file   = AUTO_RESPONSE_PATH . '/' . $result . '.php';

         require $file;

echo $message;

         $this->sendMessage($message, $subject, $email);

         return true;
      } catch (Exception $e) {
         $this->logger->log('AutoResponse::generateMessage ERROR', Zend_Log::ERR);

         return false;
      }
   }

   /**
    * send message
    *
    * @param: (string) to
    * @param: (string) subject
    * @param: (string) message
    * @return: (bool) true on success
    */
   public function sendMessage($message, $subject, $email) {
      try {
         $userObj = new User();
         $userObj->email($message, $subject, $email);

         return true;
      } catch (Exception $e) {
         $this->logger->log('AutoResponse::sendMessagge ERROR', Zend_Log::ERR);
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
