<?php
/*-----------------------------------------------------------
User class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 4, 2013

int addUser(array)
void authenticateUser(string, string)
string getDirectory(int)
mixed getField(int, string)
string getDirectory(int)
bool setPaid(int)
bool email(string, int)
------------------------------------------------------------*/

require_once 'config/config.php';

class User
{
   private $db;

   protected $user_id;
   protected $firstname;
   protected $lastname;
   protected $email;
   protected $password;
   protected $zipcode;
   protected $subscribe;
   protected $tos;
   protected $promo;

   /**
    * construct
    */
   public function __construct($user = null) {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');
   }

   /**
    * add user
    *
    * @param: (array) data
    * @return: (int) last insert id
    */
   public function addUser($data) {
      try {
         $progressObj = new Progress();

         $n = $this->db->insert(TBL_USER, $data);
         $id = $this->db->lastInsertId();

         // log new user in
         $this->authenticateUser($data['email'], $data['password']);

         // setup current progress
         $progressObj->setProgress($id);

         return $id;
      } catch (Exception $e) {
         // log
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);
         return false;
      }
   }

   /**
    * get the user's directory
    *
    * @param: (int) user_id
    * @return: (string) directory
    */
   public function getDirectory($user_id) {
      $email = $this->getField($user_id, 'email');
      $dir = str_replace(array('@', '.'), '_', $email);

      return UPLOAD_DIR . '/' . $dir;
   }

   /**
    * authenticate user
    *
    * @param: (string) username/email
    * @param: (string) password/md5
    */
   public function authenticateUser($username, $password) {
      $authAdapter = new AuthAdapter($username, $password);
      $auth        = Zend_Auth::getInstance();
      $result      = $auth->authenticate($authAdapter);
      $identity    = $auth->getIdentity();

      if ($result->isValid()) {
         // presist to session
         $authNamespace = new Zend_Session_Namespace('Zend_Auth');
         $authNamespace->logged_in = true;

         // get current progress and persist
         $progressObj = new Progress();
         $progress = $progressObj->getProgress($identity['user_id']);
         $authNamespace->progress = $progress;
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
         $query = "SELECT `$field` FROM " . TBL_USER . " WHERE user_id = ?";
         $result = $this->db->fetchOne($query, $user_id);

         return $result;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);

         return false;
      }
   }

   /**
    * set user as paid
    *
    * @param: (int) user_id
    * @return: (bool) true on success
    */
   public function setPaid($user_id) {
      try {
         $n = $this->db->update(TBL_USER, array('paid' => 1), "user_id = $user_id");
         return true;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($message, Zend_Log::ERR);
         return false;
      }
   }

   /**
    * send an email to user
    *
    * @param: (string) message
    * @param: (string) subject
    * @param: (mixed) user_id (or email address)
    * @param: (string) from  - highest priority from address
    * @return: (bool)
    */
   public function email($message, $subject, $user_id, $from = null) {
      if (is_string($user_id))
         $to = $user_id;
      else
         $to = $this->getField($user_id, 'email');

      $header = 'From: no-reply@introtohtml.net' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

      $result = mail($to, $subject, $message, $headers);

      if (!$result) {
         $this->logger->log($e->message(), Zend_Log::ERR);
         return false;
      }

      return true;
   }
}
