<?php
/*-----------------------------------------------------------
progress.php
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 29, 2013

determine progression state after lab completion
------------------------------------------------------------*/
require_once '../config/config.php';

// instantiate Progress Obj
$progressObj = new Progress();

// instantiate Application obj
$applicationObj = new Application();

// Workspace obj
$workspaceObj = new Workspace();

// user
$userObj = new User();

// get session data and HTTP GET params
$progression = $authNamespace->progress['progression'];
$proceed     = htmlspecialchars($_GET['proceed']);

// if proceed is empty, get current db value
if (empty($proceed))
   $proceed = $authNamespace->progress['proceed'];

// log message
$log_message  = "ProgressController() USERTYPE = " . USERTYPE;
$log_message .= "\nProgressController() PROGRESSION = $progression";
$logger->log($log_message, Zend_Log::INFO);

// increment values (progess only if not waiting for Bud)
if ($proceed) {
   $progression = $progression + PROGRESSION_INCREMENT;
}

$data = array('progression' => $progression,
              'proceed'     => $proceed);

switch (USERTYPE) {

   case USER_STANDARD :
   case USER_DISCOUNT :
   case USER_FREE :
   case USER_FIT :
      // progression
      $progressObj->setProgress($user_id, $data);
      
      // reset files uploaded (number)
      $workspaceObj->resetNumFilesUploaded();
      
      // consume current app state and determine next
      $applicationObj->consumeApplicationState();
   break;

   case USER_CLASSROOM :
      // case irrelevant
   break;
}

header('Location: /index.php');
