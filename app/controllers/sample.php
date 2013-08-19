<?php
/*-----------------------------------------------------------
sample.php - for cats who want to sample the course
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 18, 2013

Process, register, and login a user after they choose to
try the first two lessons
------------------------------------------------------------*/

require_once '../config/config.php';

$firstname        = $_SESSION['Zend_Auth']['firstname'];
$username         = $_SESSION['Zend_Auth']['username'];
$password         = $_SESSION['Zend_Auth']['password'];
$promotional_code = $_SESSION['Zend_Auth']['promotional_code'];

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

// echo '<pre>'; print_r($data);

if ($user_id) { // registration and subsequent login OK
   // persist (pointless because of domain crossing)
   // $authNamespace = new Zend_Session_Namespace('Zend_Auth');
   // $authNamespace->logged_in = true;

   // promotional code
   $promocodeObj    = new PromoCode();
   $registrationObj = new Registration();

   // user type
   $promocode = $promocodeObj->getPromoCode($promotional_code);
   $registrationObj->updateUserType($promocode['usertype_id'], $user_id);   

   // auto-response
   $autoResponseObj = new AutoResponse();
   $autoResponseObj->generateMessage(REGISTER_NO_PROMO, $user_id);

//   header('Location: http://dev.introtohtml.net/login.php?email=' . $username);
   header('Location: /app/controller/login.php');
}
