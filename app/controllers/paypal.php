<?php
/*-----------------------------------------------------------
successful payment made (controller)

Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 22, 2013
Modified: August 17, 2013
------------------------------------------------------------*/
require_once '../config/config.php';

// todo: use Paypal IPN (or similar technology) to determine
//       whether the payment transaction was successful
$success = true;

if ($success) {
   // update paid status
   $userObj = new User();
   $userObj->setPaid(USER_ID);

   // send auto-response email
   switch (USERTYPE) {
      case USER_DISCOUNT :
      break;

      case USER_STANDARD :
      default :
      break;
   }

} else {

}

// update progress
header('Location: /app/controllers/progress.php');
