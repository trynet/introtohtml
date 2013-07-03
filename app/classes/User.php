<?php
/*-----------------------------------------------------------
User class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013
------------------------------------------------------------*/

require_once 'config/config.php';

class User {
   private $db;

   protected $user_id;
   protected $firstname;
   protected $lastnme;
   protected $email;
   protected $password;
   protected $zipcode;

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
         $n = $this->db->insert(TBL_USER, $data);
         $id = $this->db->lastInsertId();

         // log new user in
         $this->authenticateUser($data['email'], $data['password']);

         // setup current progress

         return $id;
      } catch (Exception $e) {
         // log
         include 'includes/db_logger.php';
         $this->logger->log($message, Zend_Log::ERR);
         return false;
      }
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
         // get current progress
         // presist to session
         // redirect
         header('Location: /');
      }
   }
}
