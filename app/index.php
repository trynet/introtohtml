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
      // user just finisehd lab 1, send to subscription, but
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
      
/*
   case REGISTER_NO_PROMO :
      // user just registered with no promo code
      // handled in controllers/sample.php when received from 
      // joyofcode.com
   break;
*/
}
