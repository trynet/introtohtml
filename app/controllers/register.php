<?php
/*-----------------------------------------------------------
register controller

Author: Gbenga Ojo <service@lucidmediaconcepts.com?
Origin Date: July 21, 2013
Modified: August 23, 2013
------------------------------------------------------------*/

if (is_null($_POST['submit'])) {
   require_once 'app/config/config.php';

   $userObj = new User();

   $firstname = $userObj->getField(USER_ID, 'firstname');
   $email     = $userObj->getField(USER_ID, 'email');
} else {
   require_once '../config/config.php';

   $userObj = new User();
   $registrationObj = new Registration();

   $firstname = htmlspecialchars($_POST['firstname']);
   $lastname  = htmlspecialchars($_POST['lastname']);
   $email     = htmlspecialchars($_POST['email']);
   $found     = htmlspecialchars($_POST['found']);
 //$subscribe = htmlspecialchars($_POST['subscribe']);
 //$promo     = htmlspecialchars($_POST['promo']);
   $tos       = htmlspecialchars($_POST['tos']);
   $submit    = htmlspecialchars($_POST['submit']);

   $data = array('lastname'  => $lastname,
                 'found'     => $found,
               //'subscribe' => $subscribe,
               //'promo'     => $promo,
                 'tos'       => $tos);

   $result = $registrationObj->registerUser($data, USER_ID);

   if ($result) {
      $usertype = $userObj->getField(USER_ID, 'usertype');
   }

   // simply progress - no need for the free user to go to
   // paypal
   if ($usertype == USER_FREE) {
      header('Location: /app/controllers/progress.php');
      exit();
   }

   // by now, only standard and discount users should be here,
   // all others have been filtered out by index.php and this
   // file (FIT & CLASSROOM in index.php; FREE directly above)
   // Auto-responses for the final two groups (discount, standard)
   // will be sent in the paypal controller, since the response needs
   // to include whether or not the payment was successful.

   // FIT users are also sent to paypal, but directly from the JOC
   // site, where upon the will reach the /controllers/paypal.php
   // page and have their auto-response sent like the STANDARD and
   // DISCOUNT users. The appropriate message will the in the session
   // variables (message_id and instructor_message_id)
   $params = "u=" . $usertype;
   header('Location: /paypal.php?' . $params);
}
