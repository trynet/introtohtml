<?php
/*-----------------------------------------------------------
Promotional code class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 21, 2013
Modified: August 4, 2013

construct
array isValid(string)
array getPromoCode(string)
------------------------------------------------------------*/

require_once 'config/config.php';

class PromoCode {
   private $db;

   protected $promos;

   /**
    * construct
    */
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');

      $query = "SELECT * FROM promocode";
      $this->promos = $this->db->fetchAll($query);
   }

   /**
    * check promo code and return fee
    *
    * @param: (string) promotional code
    * @return: (array) promotional code record
    */
   public function isValid($promotional_code) {
      foreach ($this->promos as $promo) {
         if ($promotional_code == $promo['promocode'])
            return true;
      }

      return false;
   }

   /**
    * get promotional code record(s)
    *
    * @param: (string) promotional code
    * @return: (array)
    */
   public function getPromoCode($promotional_code) {
      $query = "SELECT * FROM promocode WHERE promocode = ?";
      $result = $this->db->fetchRow($query, $promotional_code);

      if ($result)
         return $result;
      else {
         // todo: get info from db?
         return array('usertype_id' => USER_STANDARD,
                      'promocode'   => '',
                      'fee'         => 250.00);
      }
   }
}
