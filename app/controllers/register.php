<?php
/*-----------------------------------------------------------
register controller

Auther: Gbenga Ojo <service@lucidmediaconcepts.com?
Origin Date: July 21, 2013
Modified: July 21, 2013
------------------------------------------------------------*/

require_once 'app/config/config.php';

$userObj = new User();

if (is_null($_POST['submit'])) {
   $firstname = $userObj->getField($user_id, 'firstname');
   $email     = $userObj->getField($user_id, 'email');
} else {
   $firstname = htmlspecialchars($_POST['firstname']);
   $lastname  = htmlspecialchars($_POST['lastname']);
   $email     = htmlspecialchars($_POST['email']);
   $found     = htmlspecialchars($_POST['found']);
   $subscribe = htmlspecialchars($_POST['subscribe']);
   $promo     = htmlspecialchars($_POST['promo']);
   $tos       = htmlspecialchars($_POST['tos']);
   $submit    = htmlspecialchars($_POST['submit']);
}
