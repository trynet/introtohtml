<?php
/*-----------------------------------------------------------
progress.php
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 5, 2013

determine progression state after lab completion
------------------------------------------------------------*/
require_once '../config/config.php';

$proceed = htmlspecialchars($_GET['proceed']);
$current_lesson   = $authNamespace->progress['current_lesson'];
$current_lab      = $authNamespace->progress['current_lab'];
$current_appendix = $authNamespace->progress['current_appendix'];

$message = "progress.php: usertype - " . USERTYPE .
           " current lab - $current_lab" .
           " USER_FIT - " . USER_FIT;
$logger->log($message, Zend_Log::INFO);

$progressObj = new Progress();
$progress = $authNamespace->progress;

// if user is at end of lab 1, redirect to subscribe
if ($current_lab == 1 && USERTYPE != USER_FIT) {
   header('Location: /subscription.php');
}

// if user is at end of lab 2, redirect to registration
if ($current_lab == 2 && USERTYPE != USER_FIT) {
   header('Location: /register.php');
}

// if user is a FIT user and we're at lesson 7
if (USERTYPE == USER_FIT && $current_lab == 7) {
   header('Location: /paypal.php?u=' . USER_FIT);
}

$progressObj = new Progress();

// increment values
$data = array('current_lesson'   => ++$current_lesson,
              'current_lab'      => ++$current_lab,
              'current_appendix' => ++$current_appendix);

if ($proceed == 1) {
   // proceed at own rate
   $data['proceed'] = 1;
} else {
   // wait for Bud
   $data['proceed'] = 0;
}

$progressObj->setProgress($user_id, $data);
header('Location: /index.php');
