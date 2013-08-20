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
         $this->logger->log('AutoResponse::generateMessage() BEGIN TRY BLOCK', Zend_Log::INFO); 

         $message   = '';                               // defined in $file
         $subject   = '';                               // defined in $file
         $signature = "Bud Kraus\n" .               // used in $file
                      "New York City Web Design Instructor\n" .
                      "Joy Of Code\n" .
                      "www.joyofcode.com\n" .
                      "973 479 2914\n\n" .

                      "Learn HTML, CSS and WordPress Online With Me";

         // get user data
         $userObj   = new User();
         $firstname = $userObj->getField($user_id, 'firstname');
         $lastname  = $userObj->getField($user_id, 'lastname');
         $email     = $userObj->getField($user_id, 'email');
         $promo     = $userObj->getField($user_id, 'promo');
         $found     = $userObj->getField($user_id, 'found');

         // subscriptions
         $html      = $userObj->getField($user_id, 'html');
         $css       = $userObj->getField($user_id, 'css');
         $wordpress = $userObj->getField($user_id, 'wordpress');
         $html      = ($html == 1)      ? 'HTML' : '';
         $css       = ($css == 1)       ? 'CSS'  : '';
         $wordpress = ($wordpress == 1) ? 'WP'   : '';

         // urls
         $workspaceObj = new Workspace();
         $urls = print_r($workspaceObj->getFileUrls($user_id), true);

         $location  = ''; // todo: Location API

         // get message from db, filesystem, define $message in $file and require
         $query  = "SELECT `filename` FROM autoresponse WHERE `autoresponse_id` = ?";
         $result = $this->db->fetchOne($query, $message_id);
         $file   = AUTO_RESPONSE_PATH . '/' . $result . '.php';

         require $file;

         // change email to instructor email if param is set
         if ($params['instructor'] == true)
            $email = EMAIL_INSTRUCTOR;

         $this->sendMessage($message, $subject, $email);
         $this->logger->log('AutoResponse::generateMessage() SEND', Zend_Log::INFO); 

         return true;
      } catch (Exception $e) {
         $this->logger->log('AutoResponse::generateMessage() ERROR', Zend_Log::ERR);

         return false;
      }
   }

   /**
    * send message
    *
    * @param: (string) message
    * @param: (string) subject
    * @param: (string) email
    * @param: (bool) instructor - if TRUE, send to instructor email
    * @return: (bool) true on success
    */
   public function sendMessage($message, $subject, $email, $instructor = false) {
      try {
         if ($instructor)
            $email = EMAIL_INSTRUCTOR;

         $userObj = new User();
         $userObj->email($message, $subject, $email);

         // log message
         $log_message  = "AutoResponse::sendMessage() MESSAGE\n";
         $log_message .= "$message\nSUBJECT: $subject\nEMAIL: $email";
         $this->logger->log($log_message, Zend_Log::ERR);

         return true;
      } catch (Exception $e) {
         $this->logger->log('AutoResponse::sendMessage() ERROR', Zend_Log::ERR);
      }
   }
}
