<?php
/*-----------------------------------------------------------
index.php - 'gateway' to application by way of the application
   state
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 17, 2013
Modifed: August 17, 2013
------------------------------------------------------------*/
require_once 'config/config.php';

// get application state
$authNamespace     = new Zend_Session_Namespace('Zend_Auth');
$APPLICATION_STATE = $authNamespace->APPLICATION_STATE;

// wont always be defined, but defined enought to place here
$proceed = htmlspecialchars($_GET['proceed']);
$progressObj = new Progress();

switch ($APPLICATION_STATE) {
   case INITIAL_STATE :
      // user just finisehd lab 1, send to subscription
      // send auto-responses
      switch ($proceed) {
         case PROCEED_WAIT :
            $message_id = UPLOAD_LAB1_REVIEW;
            $instructor_message_id = UPLOAD_LAB1_REVIEW_INSTRUCTOR;
         break;

         case PROCEED_CONTINUE :
         default :                               // should really only ever be 0 or 1
            $message_id = UPLOAD_LAB1_NO_REVIEW; // if not, someone prolly did something naughty
            $instructor_message_id = UPLOAD_LAB1_NO_REVIEW_INSTRUCTOR;
         break;
      }
      // to user
      $autoResponseObj = new AutoResponse();
      $autoResponseObj->generateMessage($message_id, $user_id);

      // to instructor
      $params = array('instructor' => true);
      $autoResponseObj->generateMessage($instructor_message_id, $user_id, $params);

      // save wait or proceed choice first
      $data = array('proceed' => $proceed);
      $progressObj->setProgress(USER_ID, $data);

      header('Location: /subscription.php');
      exit();
   break;

   case SECONDARY_STATE :
      // user subscribed and finished lab two. next, they'll
      // need to finish registration and pay
      $data = array('proceed' => $proceed);
      $progressObj->setProgress(USER_ID, $data);
      header('Location: /register.php');
      exit();
   break;

   case TERTIARY_STATE :
   default :
      // for all user groups except U(4) FIT, continue
      header('Location: /app/controllers/progress.php');
   break;
}
