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
                    'promo'     => $row['promo']);
// echo '<pre>'; print_r($_SESSION); print_r($data); exit;

      // delete the user so they may be added properly
      $_SESSION['Zend_Auth'] = '';
      $query = "DELETE FROM user WHERE email = '$email'";
      mysql_query($query);

      // add the user properly
      $userObj = new User();
      $user_id = $userObj->addUser($data);

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
//echo '<pre>'; print_r($_SESSION); exit;
      //   header('Location: http://dev.introtohtml.net/login.php?email=' . $username);
         header("Location: /app/controllers/login.php?username=$email&password=$password");
      }
   }
}
