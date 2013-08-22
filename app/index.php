<?php
/*-----------------------------------------------------------
index.php - 'gateway' to application by way of the application
   state
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 17, 2013
Modifed: August 22, 2013
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
      // user just finished lab 1, send to subscription
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
      // had to move to controllers/subscription.php in order to have subscription
      // data present in message.
      /*$params = array('instructor' => true);
      $autoResponseObj->generateMessage($instructor_message_id, $user_id, $params);*/

      // save wait or proceed choice first
      $data = array('proceed' => $proceed);
      $progressObj->setProgress(USER_ID, $data);

      header('Location: /subscription.php');
      exit();
   break;

   case SECONDARY_STATE :
      // user subscribed and finished lab two. next, they'll
      // need to finish registration and pay

      // but first, auto-responses; these will be saved to session
      // variables because two out of four use cases must be
      // redirected to Paypal before sending our auto-response
      switch ($proceed) {
         case PROCEED_WAIT :
            $message_id            = UPLOAD_LAB2_REVIEW;
            $instructor_message_id = UPLOAD_LAB2_REVIEW_INSTRUCTOR;
         break;

         case PROCEED_CONTINUE :
         default :
            $message_id            = UPLOAD_LAB2_NO_REVIEW;
            $instructor_message_id = UPLOAD_LAB2_NO_REVIEW_INSTRUCTOR;
         break;
      }
      // session variable
      $authNamespace->message_id = $message_id;

      // if any of the following (non-immediately-paying) usertypes are using
      // the app, send the auto-response, now.
      // if (!(USERTYPE == USER_STANDARD || USERTYPE == USER_DISCOUNT)) {
      // if (USERTYPE == USER_FREE || USERTYPE == USER_FIT || USERTYPE == USER_CLASSROOM) {
      if (USERTYPE == USER_FREE || USERTYPE == USER_CLASSROOM) {
         // to user
         $autoResponseObj = new AutoResponse();
         $autoResponseObj->generateMessage($message_id, $user_id);

         // to instructor
         $params = array('instructor' => true);
         $autoResponseObj->generateMessage($instructor_message_id, $user_id, $params);
      }

      // save wait or proceed choice
      $data = array('proceed' => $proceed);
      $progressObj->setProgress(USER_ID, $data);

      // fit and classroom users have already registered all of
      // their information. fit users have paid after having registered
      // at the JOC site. simply progress...
      if (USERTYPE == USER_FIT || USERTYPE == USER_CLASSROOM) {
         header('Location: /app/controllers/progress.php');
         exit();
      }

      // all other users need to register the remainder of their
      // infor before progressing
      header('Location: /register.php');
      exit();
   break;

   case TERTIARY_STATE :
   default :
      // for lessons labs 3 - 9, only send autoresponses to instructor
      // for all user groups except U(4) FIT, continue
      $autoResponseObj = new AutoResponse();
      $params = array('instructor' => true);


      // todo - determine message id based on progression
      if ($proceed) 
         $autoResponseObj->generateMessage(UPLOAD_LAB3_NO_REVIEW_INSTRUCTOR, $user_id, $params);
      else
         $autoResponseObj->generateMessage(UPLOAD_LAB3_REVIEW_INSTRUCTOR, $user_id, $params);

      header("Location: /app/controllers/progress.php?proceed=$proceed");
   break;
}













