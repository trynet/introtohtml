<?php
/*-----------------------------------------------------------
Paypal class
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 25, 2013
Modifed: August 25, 2013

construct
------------------------------------------------------------*/
require_once 'config/config.php';

class Paypal
{
   /**
    * URL for cURL
    * @var string url
    */
   var $_url = 'https://www.paypal.com/cgi-bin/webscr';
   //$url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';

   /**
    * construct
    */
   public function __construct() {
      $this->db = Zend_Db_Table::getDefaultAdapter();
      $this->logger = Zend_Registry::get('logger');
   }

   /**
    * query Paypal IPN to determine transaction status
    *
    * @return: (array) if payment successful and verified;
    *          (bool) false otherwise
    * @throws: null
    */
   public function verify() {
      $postFields  = 'cmd=_notify-validate';

      // send POST back to paypal for verification
      foreach ($_POST as $key => $value) {
         $postFields .= "&$key=" . urlencode($value);
      }
      $ch = curl_init();

      curl_setopt_array($ch, array(
            CURLOPT_URL            => $this->_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $postFields));

      $result = curl_exec($ch);
      curl_close($ch);


      // HTTP 200 ok
      $ch = curl_init();
      curl_setopt_array($ch, array(CURLOPT_URL => $this->_url,
                                   CURLOPT_SSL_VERIFYPEER => false));
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('HTTP/1.1 200 OK'));

      curl_exec($ch);
      curl_close($ch);

      $fh = fopen('/home1/joyofcod/public_html/_dev_intro/workspace/service_lucidmediaconcepts_com/result.txt', 'w');
      fwrite($fh, "$result -- $postFields");

      if ($result == 'VERIFIED') {
         // get user_id from $_POST; return user_id
         $custom = $_POST['custom'];
         $vars = urldecode($custom);
         $vars = split('&', $vars);
         $message_id            = htmlspecialchars(substr($vars[1], strpos($vars[1], '=') + 1));
         $instructor_message_id = htmlspecialchars(substr($vars[2], strpos($vars[2], '=') + 1));
         $user_id               = htmlspecialchars(substr($vars[3], strpos($vars[3], '=') + 1));
         $homepage_message_id   = htmlspecialchars(substr($vars[4], strpos($vars[4], '=') + 1));

         $arr = array('message_id'            => $message_id,
                      'instructor_message_id' => $instructor_message_id,
                      'user_id'               => $user_id,
                      'homepage_message_id'   => $homepage_message_id);

         return $arr;
      }

      return false;
   }
}
