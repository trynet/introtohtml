<!DOCTYPE html>
<html>
<head>
   <title>Intro To HTML</title>
   <link rel="stylesheet" href="app/includes/style.css" type="text/css" />
</head>

<body>

   <form name="register" id="register" action="register.process.php">
      <table>
         <tr>
            <td>First Name:</td>
            <td><input type="text" name="firstname" value="<?php echo '' ?>" /></td>
         </tr>
         <tr>
            <td>Email Address:</td>
            <td><input type="text" name="username" value="<?php echo '' ?>" /></td>
         </tr>
         <tr>
            <td>Last Name:</td>
            <td><input type="text" name="" value="<?php echo '' ?>" /></td>
         </tr>
         <tr>
            <td>How Did You Find This Class?</td>
            <td><input type="text" name="" value="<?php echo '' ?>" /></td>
         </tr>
         <tr>
            <td>May I subscribe you to my Joy of Code Blog?</td>
            <td><input type="checkbox" name="" value="<?php echo '' ?>" /></td>
         </tr>
            <td>Promo Code:</td>
            <td><input type="text" name="" value="<?php echo '' ?>" /></td>
         <tr>
            <td>Accept TOS?</td>
            <td><input type="checkbox" name="" value="<?php echo '' ?>" /></td>
         </tr>
         <tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
         </tr>
      </table>
   </form>

</body>

</html>
