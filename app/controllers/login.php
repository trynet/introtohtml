<?php
/*-----------------------------------------------------------
login controller
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 17, 2013
------------------------------------------------------------*/

require_once '../config/config.php';

$userObj = new User();

if ($_SESSION['Zend_Auth']['SSO'] == true) {
   // already authenticated from JoyOfCode
   $user_id = $userObj->authenticateUser('...', '...', true);
   header('Location: /index.php');
   exit();
}

$username = htmlspecialchars($_REQUEST['username']);
$password = md5(htmlspecialchars($_REQUEST['password']));

$data = array('email'    => $username,
              'password' => $password);

$user_id = $userObj->authenticateUser($username, $password);

header('Location: /index.php');
