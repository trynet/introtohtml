<?php
/*-----------------------------------------------------------
User class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: September 9, 2013

int addUser(array)
void authenticateUser(string, string)
string getDirectory(int)
mixed getField(int, string)
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
    * @param: (int) if user_id exists, update
    * @return: (int) last insert id
    */
   public function addUser($data, $user_id = null) {
      try {
         $progressObj  = new Progress();
         $workspaceObj = new Workspace();

         if (is_null($user_id)) {
            $n = $this->db->insert(TBL_USER, $data);
            $id = $this->db->lastInsertId();
         } else {
            $n = $this->db->update(TBL_USER, $data, "user_id = $user_id");
            $id = $user_id;
         }

         // log new user in
         $this->authenticateUser($data['email'], $data['password']);

         // setup current progress
         $progressObj->addProgress($id, $data['promo']);

         // create workspace dir
         $workspaceObj->createDirectory($id);

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
    * get sso authentication
    * todo: delete - don't think this is being used
    *
    * @param: username - email address
    * @return:
    */
   public function getSsoAuthentication($username) {
      try {
         $query = "SELECT logged_in FROM " . TBL_USER . " WHERE email = ?";
         $result = $this->db->fetchOne($query, $username);

         return true;
      } catch (Exception $e) {
         $dbLoggerObj = new DbLogger($e);
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);

         return false;
      }
   }

   /**
    * authenticate user
    *
    * @param: (string) username/email
    * @param: (string) password/md5
    */
   public function authenticateUser($username, $password, $sso = false) {
      // todo: set logged_in = 1;
      $authAdapter = new AuthAdapter($username, $password);
      $auth        = Zend_Auth::getInstance();
      $result      = $auth->authenticate($authAdapter);
      $identity    = $auth->getIdentity();
      $user_id = $identity['user_id'];

      if ($result->isValid() || $sso == true) {
         // presist to session
         $authNamespace = new Zend_Session_Namespace('Zend_Auth');
         $authNamespace->logged_in = true;

         // application state
         $applicationObj = new Application();
         if (is_null($authNamespace->APPLICATION_STATE)) {
            $application_state = $applicationObj->getApplicationState($identity['user_id']);
            $authNamespace->APPLICATION_STATE = $application_state;
         } 

         // get current progress and persist
         $progressObj             = new Progress();
         $progress                = $progressObj->getProgress($identity['user_id']);
         $authNamespace->progress = $progress;

         /*------------------------------------------------------------------------
         "Fail-safe" to obtain application state values, several of which have
         fluctuated in requirements over the course of development. Refactoring is
         quite necessary -- see config/config.php for notes
         -------------------------------------------------------------------------*/
         if (empty($authNamespace->storage['usertype']))
            $authNamespace->storage['usertype']     = $applicationObj->getField('usertype', $user_id);
         if (empty($authNamespace->storage['promo']))
            $authNamespace->storage['promo']        = $applicationObj->getField('promotional_code', $user_id); 
         if (empty($authNamespace->progress['progression']))
            $authNamespace->progress['progression'] = $applicationObj->getField('progression', $user_id);
         if (empty($authNamespace->progress['proceed']))
            $authNamespace->progress['proceed']     = $applicationObj->getField('proceed', $user_id);
         if (empty($authNamespace->num_files_uploaded))
            $authNamespace->num_files_uploaded      = $applicationObj->getField('num_files_uploaded', $user_id);
         if (empty($authNamespace->homepage_message))
            $authNamespace->homepage_message        = $applicationObj->getField('message', $user_id);
         if (empty($authNamespace->APPLICATION_STATE))
            $authNamespace->APPLICATION_STATE       = $applicationObj->getField('application_state', $user_id);

         // log message
         $this->logger->log('User::authenticateUser() - REDUNDANT APPLICATION STATE CHECK OK', Zend_Log::INFO);
      }
   }

   /**
    * log user out
    *
    * @param: (int) user_id
    * @return: (bool) true on success
    */
   public function logout($user_id) {
      try {
         $n = $this->db->update(TBL_USER, array('logged_in' => 0), "user_id = $user_id");

         // save application state
         $query = "SELECT application_state FROM progress WHERE user_id = ?";
         $db_app_state = $this->db->fetchOne($query, $user_id);

         $authNamespace = new Zend_Session_Namespace('Zend_Auth');
         $session_app_state = $authNamespace->APPLICATION_STATE;

         $app_state = max($db_app_state, $session_app_state);

         $applicationObj = new Application();
         $applicationObj->saveApplicationState($app_state);

         return true;
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
         $this->logger->log($dbLoggerObj->message, Zend_Log::ERR);
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
      // set to address
      if (is_string($user_id))
         $to = $user_id;
      else
         $to = $this->getField($user_id, 'email');

      // set from address
      if (is_null($from))
         $from = 'Bud Kraus <bud@joyofcode.com>';

      // set headers
      $headers = "From: $from" . "\r\n" .
                 "Cc: introtohtml@lucidmediaconcepts.com" . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

      try {
         $logmessage = "to: $to, from: $from\nheaders:\n$headers";
         $this->logger->log("User::email() $logmessage", Zend_Log::INFO);

         $result = mail($to, $subject, $message, $headers);

         if ($result)
            $this->logger->log("User::email() MESSAGE SENT", Zend_Log::INFO);
         else
            $this->logger->log("User::email() ERROR SENDING MESSAGE", Zend_Log::INFO);

         return true;
      } catch (Exception $e) {
         $this->logger->log($e->message(), Zend_Log::ERR);
         return false;
      }
   }
}
