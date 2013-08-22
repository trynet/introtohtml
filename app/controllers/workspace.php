<?php
/*-----------------------------------------------------------
workspace controller
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 4, 2013
Modified: August 21, 2013
------------------------------------------------------------*/
require_once '../config/config.php';

$a = htmlspecialchars($_GET['a']);
$workspaceObj = new Workspace();

// todo - add delete action
if ($a == 'delete') {
   $file = htmlspecialchars($_GET['file']);
   $workspaceObj->deleteFile(USER_ID, $file);
}
   

if ($action == '') {
   $result = $workspaceObj->uploadFile($user_id, $_FILES);

   // if some error (perhaps even malicious attempt; regexp or
   // similar input filters in Workspace::uploadFile() needed)
   if (!$result) {
      header('Location: /workspace.php?error=1');
      exit();
   }
}

header('Location: /workspace.php');
