<?php
// Single Sign-On ...
session_start();

$email = htmlspecialchars($_GET['email']);

if (strlen($email) > -1) {
   mysql_connect('localhost', 'joyofcod', 'Bk050553@');
   mysql_select_db('joyofcod_introtohtml');

   $query = "SELECT * FROM user WHERE email = '$email'";
   $result = mysql_query($query);

   if ($result) {
      // obtain user record
      $row = mysql_fetch_array($result);

      if ($row['logged_in']) {
         // set a session variable corresponding appropriately
         // with the application expected logged in session
         $_SESSION['Zend_Auth']['logged_in'] = 1;
         $_SESSION['Zend_Auth']['SSO'] = 1;
         $_SESSION['Zend_Auth']['SSO_details'] = $row;

         // redirect
         header('Location: /app/controllers/login.php');
      }
   }
}
?>


<!DOCTYPE html>
<html>
<head>
   <title>Intro To HTML</title>
   <link rel="stylesheet" href="app/includes/style.css" type="text/css" />
</head>

<body>
   <center>
   <form name="login" action="app/controllers/login.php" method="post">
   username: <input type="text" name="username" value="<?php echo $email ?>" /><br />
   password: <input type="password" name="password" /><br />
   <input type="submit" name="submit" value="submit" />
   </form>
   </center>
</body>

</html>
