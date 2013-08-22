<?php
/*-----------------------------------------------------------
workspace controller
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 4, 2013
Modified: August 4, 2013
------------------------------------------------------------*/
require_once '../config/config.php';

$action =  htmlspecialchars($_POST['action']);

// todo - add delete action

$workspaceObj = new Workspace();
$result = $workspaceObj->uploadFile($user_id, $_FILES);

// if some error (perhaps even malicious attempt; regexp or
// similar input filters in Workspace::uploadFile() needed)
if (!$result) {
   header('Location: /workspace.php?error=1');
   exit();
}

header('Location: /workspace.php');
