<?php
/*-----------------------------------------------------------
successful payment made (controller)

Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 22, 2013
Modified: August 23, 2013
------------------------------------------------------------*/
require_once '../config/config.php';
//echo '<pre>'; print_r($DEBUG);

// todo: use Paypal IPN (or similar technology) to determine
//       whether the payment transaction was successful
$success = true;

if ($success) {
   // update paid status
   $userObj = new User();
   $userObj->setPaid(USER_ID);

   // create AutoResponse instance and get saved message_id
   // from session; These are the users who had to be redirected
   // from index.php for additional processing (payment), and
   // the FIT users who were redirected to Paypal directly from
   // the JOC site.
   $autoResponseObj = new AutoResponse();
   $authNamespace = new Zend_Session_Namespace('Zend_Auth');

   // send auto-response email
   switch (USERTYPE) {
      // FIT users must save data to DB from JOC; SSO like all other
      // users, *then* be redirected to Paypal. Otherwise, no
      // user_id, authentication, or application session data exists
      // for them.
      case USER_FIT :
         $message_idi           = FIT_USER_PAYPAL;
         $instructor_message_id = FIT_USER_PAYPAL_INSTRUCTOR;
      break;

      case USER_DISCOUNT :
      case USER_STANDARD :
      default :
         $message_id            = $authNamespace->message_id;
         $instructor_message_id = $authNamespace->instructor_message_id;
      break;
   }

//echo "message_id: $message_id; instructor_messsage_id: $instructor_message_id";
//exit;

   // send autoresponse to user
   $autoResponseObj->generateMessage($message_id, USER_ID);

   // send autoresponse to instructor
   $params = array('instructor' => true);
   $autoResponseObj->generateMessage($instructor_message_id, USER_ID, $params);

} else {

}

// update progress
header('Location: /app/controllers/progress.php');
