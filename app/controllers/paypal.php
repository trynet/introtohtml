<?php
/*-----------------------------------------------------------
successful payment made (controller)

Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 22, 2013
Modified: August 27, 2013
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
                 "; imid: " . $vars['instructor_message_id'];
   $logger->log("PaypalController - $logmessage", Zend_Log::INFO);

   // todo: 20130827 - what the heck is going on here?
   if ($vars['user_id'] == 203)
      exit;

   // create required objects
   $userObj        = new User();
   $progressObj    = new Progress();
   $workspaceObj   = new Workspace();
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
      break;
   }

   // increment values (progess only if not waiting for Bud)
   // 20130827:01:50 - a loop seems to be executing somewhere. Paypa
   //    calling this script repeatedly? fixme
   //    adding a conditional on progression so it doesn't increment
   //    during these repitions
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
      $applicationObj->consumeApplicationState();
   }
} else {
   $logger->log("PaypalController - NOT VERIFIED", Zend_Log::INFO);
   header('Location: /index.php');
   exit(); // fixme or todo
}

// header('Location: /app/controllers/progress.php');
header('Location: /index.php'); // Paypal users return to this page, but
                                // now, processing has already been done,
                                // so send to homepage
