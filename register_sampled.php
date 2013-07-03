<?php
/*-----------------------------------------------------------
register_sampled.php
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013
------------------------------------------------------------*/

require_once 'app/config/config.php';

$firstname = htmlspecialchars($_GET['firstname']);
$username  = htmlspecialchars($_GET['username']);
$password  = md5(htmlspecialchars($_GET['password']));

$data = array('firstname' => $firstname,
              'email'  => $username,
              'password'  => $password);

$userObj = new User();
$user_id = $userObj->addUser($data);

if ($user_id) { // registration and subsequent login OK
   // persist
   $authNamespace = new Zend_Session_Namespace('Zend_Auth');
   $authNamespace->logged_in = true;
   header('Location: /index.php');
}
