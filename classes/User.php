<?php
/*-----------------------------------------------------------
User class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013
------------------------------------------------------------*/

require_once '../config/config.php';

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

         return $id;
      } catch (Exception $e) {
         // log
         return false;
      }
   }
}
