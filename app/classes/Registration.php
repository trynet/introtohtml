<?php
/*-----------------------------------------------------------
Registration class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 21, 2013
Modified: July 21, 2013

construct()
------------------------------------------------------------*/

require_once 'config/config.php';

class Registration extends User {
   private $db;

   /**
    * construct
    */
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');
   }

   /**
    * register user
    *
    * @param: (array) data
    * @param: (int) user_id
    * @return: (bool) true on success
    */
   public function registerUser($data, $user_id) {
   }
}
