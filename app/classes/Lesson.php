<?php
/*-----------------------------------------------------------
Lesson class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013
------------------------------------------------------------*/
require_once 'config/config.php';

class Lesson {
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
   public function getLessons() {
      $query = "SELECT * FROM " . TBL_LESSON;
      $result = $this->db->fetchAll($query);

      return $result;
   }
}
