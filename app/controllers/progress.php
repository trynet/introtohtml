<?php
/*-----------------------------------------------------------
progress.php
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 16, 2013

determine progression state after lab completion
todo: consider splitting file into more application state
      specific entites
------------------------------------------------------------*/
require_once '../config/config.php';

$proceed          = htmlspecialchars($_GET['proceed']);

$current_lesson   = $authNamespace->progress['current_lesson'];
$current_lab      = $authNamespace->progress['current_lab'];
$current_appendix = $authNamespace->progress['current_appendix'];

$message = "progress.php: usertype = " . USERTYPE .
           " current lab = $current_lab" .
           " USER_FIT = " . USER_FIT;
$logger->log($message, Zend_Log::INFO);

$progressObj = new Progress();
$progress = $authNamespace->progress;

// increment values (fixme: currently has to be done before redirect)
$data = array('current_lesson'   => $current_lesson   + 1,
              'current_lab'      => $current_lab      + 1,
              'current_appendix' => $current_appendix + 1);

if ($proceed == 1) {
   // proceed at own rate
   $data['proceed'] = 1;
} else {
   // wait for Bud
   $data['proceed'] = 0;
}

// if user is at end of lab 1, redirect to subscribe
if ($current_lab == 1 && USERTYPE != USER_FIT) {
   $progressObj->setProgress($user_id, $data);
   header('Location: /subscription.php');
$logger->log('bp1', Zend_Log::INFO);
   exit();
}

// if user is at end of lab 2, redirect to registration
if ($current_lab == 2 && USERTYPE != USER_FIT) {
   $progressObj->setProgress($user_id, $data);
   header('Location: /register.php');
$logger->log('bp2', Zend_Log::INFO);
   exit();
}

// if user is a FIT user and we're at lesson 7
if (USERTYPE == USER_FIT && $current_lab == 7) {
   $progressObj->setProgress($user_id, $data);
   header('Location: /paypal.php?u=' . USER_FIT);
$logger->log('bp3', Zend_Log::INFO);
   exit();
}

$logger->log('bp4', Zend_Log::INFO);
$progressObj->setProgress($user_id, $data);
header('Location: /index.php');
