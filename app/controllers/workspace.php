<?php
/*-----------------------------------------------------------
workspace controller
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 4, 2013
Modified: August 4, 2013
------------------------------------------------------------*/
require_once '../config/config.php';

$action =  htmlspecialchars($_POST['action']);

$workspaceObj = new Workspace();
$n = $workspaceObj->uploadFile($user_id, $_FILES);

if (!$n) { // upload error -- uh oh!
   echo "<br>error";
} else {
   echo "<br>success";
}
