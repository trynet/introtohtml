<?php
/*-----------------------------------------------------------
Class: AuthAdapter - Authentication
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modified: July 3, 2013

Authentication
------------------------------------------------------------*/
require_once 'config/config.php';

class AuthAdapter implements Zend_Auth_Adapter_Interface
{
   public $username;
   public $password;

   private $db;

   /**
    * Setus username and password for authentication
    *
    * @param: (string) $username
    * @param: (string) $password
    */
   public function __construct($username, $password)
   {
      $this->db = Zend_Db_Table::getDefaultAdapter();

      $this->username = $username;
      $this->password = $password;
   }

   /**
    * Performs an authentication attempt
    *
    * @throws Zend_Auth_Adapter_Exception if authentication
    *    cannot be performed
    *
    * @return Zend_Auth_Result
    */
   public function authenticate() {
      // sso
      if ($_SESSION['Zend_Auth']['logged_in']) {
         $this->username = $_SESSION['Zend_Auth']['SSO_details']['email'];
         $this->password = $_SESSION['Zend_Auth']['SSO_details']['password'];

      }
      if ($this->username == '' || $this->password == '')
         return new Zend_Auth_Result(0, array($this->username, $this->password));

      // authenticate...
      $query = "SELECT * FROM " . TBL_USER . " WHERE email = ? AND password = ?";
      $row = $this->db->fetchAll($query, array($this->username, $this->password));

      if ($row[0]['email'] == $this->username || $_SESSION['Zend_Auth']['logged_in']) {
         return new Zend_Auth_Result(1, $row[0]);
      } else {
         $logger = Zend_Registry::get('log');
         $logger->log('Authentication Failure', Zend_Log::NOTICE);
         return new Zend_Auth_Result(0, array($this->username, $this->password));
      }
   }
}
