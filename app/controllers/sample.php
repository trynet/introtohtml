<?php
/*-----------------------------------------------------------
sample.php
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 4, 2013

Process, register, and login a user after the choose to
try the first two lessons
------------------------------------------------------------*/

require_once '../config/config.php';

$firstname        = htmlspecialchars($_POST['firstMame']);
$username         = htmlspecialchars($_POST['userName']);
$password         = md5(htmlspecialchars($_POST['password']));
$promotional_code = htmlspecialchars($_POST['promoCode']);

$data = array('firstname' => $firstname,
              'email'     => $username,
              'password'  => $password,
              'promo'     => $promotional_code);

$userObj = new User();
$user_id = $userObj->addUser($data);

if ($user_id) { // registration and subsequent login OK
   // persist
   $authNamespace = new Zend_Session_Namespace('Zend_Auth');
   $authNamespace->logged_in = true;

   // promotional code
   $promocodeObj = new PromoCode();
   $registrationObj = new Registration();

   $promocode = $promocodeObj->getPromoCode($promotional_code);
   $registrationObj->updateUserType($promocode['usertype_id'], $user_id);   

   // auto-response
   $autoResponseObj = new AutoResponse();
   $autoResponseObj->generateMessage(1, $user_id);

   header('Location: http://dev.introtohtml.net/login.php?email=' . $username);
}
