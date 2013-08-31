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
         $authNamespace = new Zend_Session_Namespace('Zend_Auth');

         // messages
         $messageObj = new Message();

         // promotional code
         $promocodeObj    = new PromoCode();
         $registrationObj = new Registration();

         // user type
         $promocode = $promocodeObj->getPromoCode($row['promo']);
         $registrationObj->updateUserType($promocode['usertype_id'], $user_id);   

         // auto-response depending on promotional code
         $autoResponseObj = new AutoResponse();

         switch ($promocode) {
            case PROMO_EFA :
               $message_id = REGISTER_PROMO_EFA;
               $authNamespace->homepage_message = $messageObj->getMessage(FIRST_LOGIN_UG2);
            break;

            case PROMO_GAG :
               $message_id = REGISTER_PROMO_GAG;
               $authNamespace->homepage_message = $messageObj->getMessage(FIRST_LOGIN_UG2);
            break;

            case PROMO_REDUCED :
               $message_id = REGISTER_PROMO_REDUCED;
               $authNamespace->homepage_message = $messageObj->getMessage(FIRST_LOGIN_UG2);
            break;

            case PROMO_ADULTED :
               $message_id = REGISTER_PROMO_ADULTED;
               $authNamespace->homepage_message = $messageObj->getMessage(FIRST_LOGIN_UG2);
            break;

            case PROMO_FIT :
               $message_id = REGISTER_PROMO_FIT;
               $authNamespace->homepage_message = $messageObj->getMessage(FIRST_LOGIN_UG4);
            break;

            case PROMO_CLASSROOM :
               $message_id = REGISTER_CLASSROOM_INSTRUCTOR;
               $authNamespace->homepage_message = $messageObj->getMessage(FIRST_LOGIN_UG5);
            break;

            case PROMO_NONE :
            default :
               $message_id = REGISTER_NO_PROMO;
               $authNamespace->homepage_message = $messageObj->getMessage(FIRST_LOGIN_UG1);
            break;
         }

         // auto-response to user
         $autoResponseObj->generateMessage($message_id, $user_id);
         // auto-response to instructor
         $params = array('instructor' => true);
         $autoResponseObj->generateMessage(REGISTER_INSTRUCTOR, $user_id, $params);

         header("Location: /app/controllers/login.php?username=$email&password=$password");
      }
   }
}
