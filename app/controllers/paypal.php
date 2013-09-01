<?php
/*-----------------------------------------------------------
successful payment made (controller)

Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 22, 2013
Modified: August 31, 2013
------------------------------------------------------------*/
require_once '../config/config.php';

$logger = Zend_Registry::get('logger');
$logger->log("PaypalController - EXECUTING...", Zend_Log::INFO);

// todo: use Paypal IPN (or similar technology) to determine
//       whether the payment transaction was successful
$paypalObj = new Paypal();
$vars      = $paypalObj->verify();

if (is_numeric($vars['user_id'])) {
   // log message
   $logmessage = "uid: " . $vars['user_id'] . "; mid: " . $vars['message_id'] .
                 "; imid: " . $vars['instructor_message_id'] .
                 "; hmid: " . $vars['homepage_message_id'];
   $logger->log("PaypalController - $logmessage", Zend_Log::INFO);

   // todo: 20130827 - what the heck is going on here?
   //       20130830 - paypal sent an email earlier, check it
   //                  I believe this script needs to send an HTTP 200 response
   if ($vars['user_id'] == 203)
      exit;

   // create required objects
   $userObj        = new User();
   $progressObj    = new Progress();
   $workspaceObj   = new Workspace();
   $messageObj     = new Message();
   $applicationObj = new Application();

   // update paid status
   $userObj->setPaid($vars['user_id']);

   // get usertype, progression, proceed
   $usertype    = $userObj->getField($vars['user_id'], 'usertype');
   $progression = $progressObj->getField($vars['user_id'], 'progression');
   $proceed     = $progressObj->getField($vars['user_id'], 'proceed');

   // create AutoResponse instance and get saved message_id
   // from paypal response; These are the users who had to be redirected
   // from index.php for additional processing (payment), and
   // the FIT users who were redirected to Paypal directly from
   // the JOC site.

   // send auto-response email
   switch ($usertype) {
      // FIT users must save data to DB from JOC; SSO like all other
      // users, *then* be redirected to Paypal. Otherwise, no
      // user_id, authentication, or application session data exists
      // for them.
      case USER_FIT :
         $message_id            = FIT_USER_PAYPAL;
         $instructor_message_id = FIT_USER_PAYPAL_INSTRUCTOR;
      break;

      case USER_DISCOUNT :
      case USER_STANDARD :
      default :
         $message_id            = $vars['message_id'];
         $instructor_message_id = $vars['instructor_message_id'];

         // set homepage message
         $authNamespace->homepage_message = $messageObj->getMessage($vars['homepage_message_id']);
      break;
   }

   // homepage message
   if ($usertype == USER_STANDARD) {
      $authNamespace->homepage_message = $messageObj->getMessage(POST_P2_REVIEW_PAYPAL);
   } else if ($usertype == USER_DISCOUNT) {
      $authNamespace->homepage_message = $messageObj->getMessage(POST_P2_REVIEW_PAYPAL);
   } else {
      $authNamespace->homepage_message = $messageObj->getMessage(DEFAULT_MESSAGE);
   }

   // increment values (progess only if not waiting for Bud)
   // 20130827:01:50 - a loop seems to be executing somewhere. Paypa
   //    calling this script repeatedly? fixme
   //    adding a conditional on progression so it doesn't increment
   //    during these repititions
   if ($progression < 3) {

      // send autoresponse to user
      $autoResponseObj = new AutoResponse();
      $autoResponseObj->generateMessage($message_id, $vars['user_id']);

      // send autoresponse to instructor
      $params = array('instructor' => true);
      $autoResponseObj->generateMessage($instructor_message_id, $vars['user_id'], $params);

      // update progress
      // all application logic normally executed in controllers/progress.php
      // must be manually executed here, since on response from Paypal,
      // no application or session data exists :(
      $logmessage  = "PaypalController - PROGRESS usertype = $usertype";
      $logmessage .= "\nPaypalController - PROGRESSION = $progression";
      $logger->log($logmessage, Zend_Log::INFO);

      if ($proceed)
         $progression = $progression += 1;

      $data = array('progression' => $progression,
                    'proceed'     => $proceed);

      // progression
      $progressObj->setProgress($vars['user_id'], $data);
      
      // reset files uploaded (number)
      $workspaceObj->resetNumFilesUploaded();
      
      // consume current app state and determine next
      $applicationObj->consumeApplicationState(SECONDARY_STATE, $vars['user_id']);
   }
} else {
   $messageObj     = new Message();

   if ($usertype == USER_STANDARD) {
      $authNamespace->homepage_message = $messageObj->getMessage(POST_P2_REVIEW_NO_PAYPAL_UG1);
   } else if ($usertype == USER_DISCOUNT) {
      $authNamespace->homepage_message = $messageObj->getMessage(POST_P2_REVIEW_NO_PAYPAL_UG2);
   } else if ($usertype == USER_FREE) {
      $authNamespace->homepage_message = $messageObj->getMessage(POST_P2_REVIEW_NO_PAYPAL_UG3);
   } else {
      $authNamespace->homepage_message = $messageObj->getMessage(DEFAULT_MESSAGE);
   }

   $logger->log("PaypalController - NOT VERIFIED", Zend_Log::INFO);
   header('Location: /index.php');
   exit(); // fixme or todo
}

// after all the necessary changes, don't think these are necessary
// anymore (this script is only being called in the bg by PayPal
// header('Location: /app/controllers/progress.php');
header('Location: /index.php'); // Paypal users return to this page, but
                                // now, processing has already been done,
                                // so send to homepage (requirements alteration)
