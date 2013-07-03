<?php
/*-----------------------------------------------------------
register_sampled.php
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013
------------------------------------------------------------*/

require_once 'config/config.php';

$firstname = htmlspecialchars($_GET['FirstName']);
$username  = htmlspecialchars($_GET['User']);
$password  = md5(htmlspecialchars($_GET['Password']));

$data = array('firstname' => $firstname,
              'username'  => $username,
              'password'  => $password);

$userObj = new User();
$userObj->addUser($data);
