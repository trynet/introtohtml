<?php
/*-----------------------------------------------------------
progress.php
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013

determine progression state after lab completion
------------------------------------------------------------*/
require_once '../config/config.php';

$proceed = htmlspecialchars($_GET['proceed']);
$current_lesson   = $authNamespace->progress['current_lesson'];
$current_lab      = $authNamespace->progress['current_lab'];
$current_appendix = $authNamespace->progress['current_appendix'];

// if user is at end of lab 2, redirect to registration
if ($current_lab == 2) {
   header('Location: /register.php');
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

echo '<pre>'; print_r($_SESSION);
