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

// instantiate Application obj
$applicationObj = new Application();

// Workspace obj
$workspaceObj = new Workspace();

// instantiate Progress obj; get session data and HTTP GET params
$progressObj = new Progress();
$progression = $authNamespace->progress['progression'];
$proceed     = htmlspecialchars($_GET['proceed']);

// if proceed is empty, get current db value
if (empty($proceed))
   $proceed = $authNamespace->progress['proceed'];

// log message
$log_message  = "ProgressController() USERTYPE = " . USERTYPE;
$log_message .= "\nProgressController() PROGRESSION = $progression";
$logger->log($log_message, Zend_Log::INFO);


// increment values (fixme: currently has to be done before redirect)
$data = array('progression' => $progression + PROGRESSION_INCREMENT,
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
