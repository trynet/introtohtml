<?php require_once 'app/controllers/register.php' ?>

<!DOCTYPE html>
<html>
<head>
   <title>Intro To HTML</title>
   <link rel="stylesheet" href="app/includes/style.css" type="text/css" />
</head>

<body>

   <form method="post" name="register" id="register" action="app/controllers/register.php">
      <table>
         <tr>
            <td>First Name:</td>
            <td><input type="text" name="firstname" value="<?php echo $firstname ?>" /></td>
         </tr>
         <tr>
            <td>Email Address:</td>
            <td><input type="text" name="username" value="<?php echo $email ?>" /></td>
         </tr>
         <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lastname" value="<?php echo '' ?>" /></td>
         </tr>
         <tr>
            <td>How Did You Find This Class?</td>
            <td><input type="text" name="found" value="<?php echo '' ?>" /></td>
         </tr>
         <tr>
            <td>May I subscribe you to my Joy of Code Blog?</td>
            <td><input type="checkbox" name="subscribe" value="<?php echo '' ?>" /></td>
         </tr>
            <td>Promo Code:</td>
            <td><input type="text" name="promo" value="<?php echo '' ?>" /></td>
         <tr>
            <td>Accept TOS?</td>
            <td><input type="checkbox" name="tos" value="<?php echo '' ?>" /></td>
         </tr>
         <tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
         </tr>
      </table>
   </form>

</body>

</html>
