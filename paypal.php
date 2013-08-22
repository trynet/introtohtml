<?php
require_once 'app/config/config.php';
echo '<pre>'; print_r($DEBUG); echo '</pre>';

// todo: place following logic in appropriate area outside of view
$usertype = $_GET['u'];

if ($usertype == USER_FIT) {
   $prompt = "Your promotional code qualifies you as a member of the FIT " .
             "group at a discounted rate of $60.00";
} else if ($usertype == USER_FREE) {
   $prompt = "Your promotional code qualifies you as a member of the free " .
             "group at a discounted rate of $0.00";
} else if ($usertype == USER_DISCOUNT) {
   $prompt = "Your promotional code qualifies you as a member of the discount " .
             "group at a discounted rate of $225.00";
} else {
   $usertype = USER_STANDARD;
   $prompt = "[message here - $250.00]";
}
?>


<!DOCTYPE html>
<html>
<head>
   <title>Joy Of Code: Intro To HTML -  Subscription</title>
   <link rel="stylesheet" href="styles/styles.css" />
   
   <link rel="icon" href="images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="images/favicon.png" type="image/png"/>
   


 <style type="text/css">

      section#main
      {width:800px;
      float:none;
	  margin:20px;
      padding:0 50px 0 25px ;}


      hr
      {visibility:hidden;}


   </style>
   
</head>

<body>
   <div id="wrapper">

<header>

<img src="/images/header.png"  alt="Joy Of Code Intro To HTML" />

</header>


   <section id="main">
  
   

         
      <p>Thank you for registering. <?php echo $prompt ?>.<br/>Click the button below to continue to Paypal</p><br />
      


      <form  action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
         <input type="hidden" name="cmd" value="_s-xclick">
         <input type="hidden" name="hosted_button_id" value="D5YDC2CXCAKXE">
         <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
         <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>
      



   </section>

      


      <?php include("includes/footer.php"); ?>
   </div> <!-- end wrapper -->
   
   
         
</body>

</html>