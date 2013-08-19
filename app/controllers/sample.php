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

$email = htmlspecialchars($_GET['email']);

// todo - regexp for input validation
if (strlen($email) > 3) {
   mysql_connect('localhost', 'joyofcod', 'Bk050553@');
   mysql_select_db('joyofcod_introtohtml');

   $query = "SELECT * FROM user WHERE email = '$email'";
   $result = mysql_query($query);

   if ($result) {
      $row = mysql_fetch_array($result);
      $password = $row['password'];

      $data = array('firstname' => $row['firstname'],
                    'email'     => $row['email'],
                    'password'  => $row['password'],
                    'promo'     => $row['promo'],
                    'logged_in' => $row['logged_in']);

      $_SESSION['Zend_Auth']['SSO_details']['email']    = $row['email'];
      $_SESSION['Zend_Auth']['SSO_details']['password'] = $row['password'];


      // add the user properly
      $userObj = new User();
      $user_id = $userObj->addUser($data, $row['user_id']);

      if ($user_id) { // registration and subsequent login OK
         // promotional code
         $promocodeObj    = new PromoCode();
         $registrationObj = new Registration();

         // user type
         $promocode = $promocodeObj->getPromoCode($promotional_code);
         $registrationObj->updateUserType($promocode['usertype_id'], $user_id);   

         // auto-response
         $autoResponseObj = new AutoResponse();
         $autoResponseObj->generateMessage(REGISTER_NO_PROMO, $user_id);

         header("Location: /app/controllers/login.php?username=$email&password=$password");
      }
   }
}
