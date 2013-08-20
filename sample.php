<?php
// Single Sign On - Students who want to sample the course ...
session_start();

$email = htmlspecialchars($_GET['email']);

// todo - regexp for input validation
if (strlen($email) > 3) {

   // set some SSO session variables
   $_SESSION['Zend_Auth']['logged_in'] = 1;
   $_SESSION['Zend_Auth']['SSO_details']['email']    = $username;
   $_SESSION['Zend_Auth']['SSO_details']['password'] = $password;

   header("Location: /app/controllers/sample.php?email=$email");
   exit();
}

header('Location: http://joyofcode.com');
