<?php
/*-----------------------------------------------------------
Lab class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013
------------------------------------------------------------*/
require_once 'config/config.php';

class Lab {
   private $db;

   /**
    * construct
    */
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');
   }

   /**
    * get all labs
    */
   public function getLabs() {
      $query = "SELECT * FROM " . TBL_LAB;
      $result = $this->db->fetchAll($query);

      return $result;
   }
}
