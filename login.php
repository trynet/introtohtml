<?php $email = $_GET['email'] ?>
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
