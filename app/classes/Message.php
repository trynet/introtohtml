<?php
/*-----------------------------------------------------------
Messages class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 30, 2013
Modified: August 30, 2013
------------------------------------------------------------*/

require_once 'config/config.php';

class Message
{
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdapter();
   }

   public function getMessage($message_id) {
      $query = "SELECT filename FROM message WHERE message_id = ?";
      $result = $this->db->fetchOne($query, $message_id);
      $path = MESSAGE_PATH . "/$result.php";

      return $path;
   }
}

