<?php
/*-----------------------------------------------------------
successful payment made (controller)

Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 22, 2013
Modified: July 22, 2013
------------------------------------------------------------*/
require_once '../config/config.php';

// todo: use Paypal IPN (or similar technology) to determine
//       whether the payment transaction was successful
$success = true;

if ($success) {
   // update db progress
   $progressObj = new Progress();
   $progressObj->setProgress(USER_ID);

   // update paid status
   $userObj = new User();
   $userObj->setPaid(USER_ID);
} else {

}

header('Location: /index.php');
