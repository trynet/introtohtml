<?php
/*-----------------------------------------------------------
register controller

Auther: Gbenga Ojo <service@lucidmediaconcepts.com?
Origin Date: July 21, 2013
Modified: July 21, 2013
------------------------------------------------------------*/

if (is_null($_POST['submit'])) {
   require_once 'app/config/config.php';

   $userObj = new User();

   $firstname = $userObj->getField(USER_ID, 'firstname');
   $email     = $userObj->getField(USER_ID, 'email');
} else {
   require_once '../config/config.php';

   $registrationObj = new Registration();

   $firstname = htmlspecialchars($_POST['firstname']);
   $lastname  = htmlspecialchars($_POST['lastname']);
   $email     = htmlspecialchars($_POST['email']);
   $found     = htmlspecialchars($_POST['found']);
   $subscribe = htmlspecialchars($_POST['subscribe']);
   $promo     = htmlspecialchars($_POST['promo']);
   $tos       = htmlspecialchars($_POST['tos']);
   $submit    = htmlspecialchars($_POST['submit']);

   $data = array('lastname'  => $lastname,
                 'found'     => $found,
                 'subscribe' => $subscribe,
                 'promo'     => $promo,
                 'tos'       => $tos);

   $result = $registrationObj->registerUser($data, USER_ID);
   header('Location: http://www.paypal.com');
}
