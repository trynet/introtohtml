<?php
/*-----------------------------------------------------------
register_sampled.php
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013
------------------------------------------------------------*/

require_once 'config/config.php';

$firstname = htmlspecialchars($_POST['firstname']);
$username  = htmlspecialchars($_POST['username']);
$password  = md5(htmlspecialchars($_POST['password']));
