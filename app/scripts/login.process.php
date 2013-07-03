<?php
/*-----------------------------------------------------------
login.process.php
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013
------------------------------------------------------------*/

require_once '../config/config.php';

$username  = htmlspecialchars($_POST['username']);
$password  = md5(htmlspecialchars($_POST['password']));

$data = array('email'  => $username,
              'password'  => $password);

$userObj = new User();
$user_id = $userObj->authenticateUser($username, $password);

header('Location: /index.php');
