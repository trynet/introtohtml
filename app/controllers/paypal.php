<?php
/*-----------------------------------------------------------
successful payment made (controller)

Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 22, 2013
Modified: August 16, 2013

fixme: break this page up or something. Reqs changed since last
       accessed, and payment is now made in at least 3 different
       places. Auto-responses differ greatly depending on
       paid status. While still 4 (now 5) main user_accounts
       scenarios NON-paying members will never reach this
       controller, and so must be handled elsewhere
------------------------------------------------------------*/
require_once '../config/config.php';

// todo: use Paypal IPN (or similar technology) to determine
//       whether the payment transaction was successful
$success = true;

if ($success) {
   // update db progress -- fixme: progress should be updated
// only after paying, but right now, I believe app/controllers/progress.php
// is being called before the redirect here.
//   $progressObj = new Progress();
//   $progressObj->setProgress(USER_ID);

   // update paid status
   $userObj = new User();
   $userObj->setPaid(USER_ID);

   // send auto-response email
   // fixme: this wont work for USER_FIT - they will never reach
   //        page because they'll never go through paypal
   switch (USERTYPE) {
      case USER_DISCOUNT :

      break;

      case USER_FREE :

      break;

      case USER_FIT :

      break;

      case USER_STANDARD :
      default :

      break;
   }

} else {

}

// fixme: put some helpful logs here - generally before redirects
header('Location: /index.php');
