<?php
/*-----------------------------------------------------------
register controller

Author: Gbenga Ojo <service@lucidmediaconcepts.com?
Origin Date: July 21, 2013
Modified: August 31, 2013
------------------------------------------------------------*/


if (is_null($_POST['submit'])) {
   require_once 'app/config/config.php';

   $userObj = new User();

   // if payment is processing...
/*
   $lastname = $userObj->getField(USER_ID, 'lastname');
   if ($lastname != '') {
      header("Location: /payment_processing.html");
      exit;
   }
*/

   $firstname = $userObj->getField(USER_ID, 'firstname');
   $email     = $userObj->getField(USER_ID, 'email');
} else {
   require_once '../config/config.php';

   $userObj = new User();
   $registrationObj = new Registration();

   $firstname = htmlspecialchars($_POST['firstname']);
   $lastname  = htmlspecialchars($_POST['lastName']);
   $email     = htmlspecialchars($_POST['email']);
   $found     = htmlspecialchars($_POST['found']);
   $tos       = htmlspecialchars($_POST['tos']);
   $submit    = htmlspecialchars($_POST['submit']);

   $data = array('lastname'  => $lastname,
                 'found'     => $found,
                 'tos'       => $tos);

   if ($lastname == '' || $found == '' || $tos == '') {
      header('Location: /register.php');
      exit();
   }

   $result = $registrationObj->registerUser($data, USER_ID);

   if ($result) {
      $usertype = $userObj->getField(USER_ID, 'usertype');
   }

   // simply progress - no need for the free user to go to
   // paypal
   // updated requirements -- paying users who decide to wait
   // on instructor feedback should not be sent to Paypal
   // until instructor decides
   $authNamespace = new Zend_Session_Namespace('Zend_Auth');
   $proceed = $authNamespace->progress['proceed'];

   if ($usertype == USER_FREE || $proceed == 0) {
      header('Location: /app/controllers/progress.php');
      exit();
   }

   // save application state
   $applicationObj = new Application();
   $applicationObj->saveApplicationState();


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
   $params = "u=$usertype&user_id=$user_id";
   header('Location: /paypal.php?' . $params);
}
