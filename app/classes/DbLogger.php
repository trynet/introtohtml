<?php
/*-----------------------------------------------------------
DbLogger class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 17, 2013
------------------------------------------------------------*/

require_once 'config/config.php';

class DbLogger {
   public $trace;
   public $message;

   /**
    * construct
    */
   public function __construct($e) {
      $this->trace    = $e->getTrace();
      $this->message  = $e->getMessage();
      $this->message .= "\n" . print_r($this->trace[2]['args'], true);
   }
}
