<?php
/*-----------------------------------------------------------
Promotional code class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 21, 2013
Modified: July 21, 2013

construct
------------------------------------------------------------*/

require_once 'config/config.php';

class Promo {
   private $db;

   protected $promos;

   /**
    * construct
    */
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdatpet();
      $this->logger = Zend_Registry::get('logger');

      $query = "SELECT * FROM promocode";
      $this->promos = $this->db->fetchAll($query);
   }

   /**
    * check promo code and return fee
    *
    * @param: (string) promotional code
    * @return: (float) fee
    */
   public function isValid($promotional_code) {
      foreach ($this->promos as $promo) {
         if ($promotional_code == $promo['promocode'])
            return $promo['fee'];
         else
            return PROGRAM_FEE;
      }
   }
}
