<?php
require_once 'app/config/config.php';
require_once 'app/controllers/register.php';
echo '<pre>'; print_r($DEBUG); echo '</pre>';
?>

<!DOCTYPE html>
<html>
<head>
   <title>Joy Of Code: Intro To HTML -  Registration</title>
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

<!--
<nav>
<ul class="nav nav-pills">

<li><a href="/"><i class="icon-home"></i>Home Room</span></a></li>
<li><a href="/frontoffice"><i class="icon-info-sign"></i>Front Office</a></li>
<li><a href="/code_tester.html"><i class="icon-pencil"></i>Code Tester</a></li>
<li><a href="/workspace.php"><i class="icon-cog"></i>Work Space</a></li>
<li><a href="/logout.php"><i class="icon-off"></i>Sign Out</a></li>

</ul>
</nav> 
-->
</header>




         <section id="main">

<!--<div class="container">
<div class="row">

<div class="span6">-->
 
   <p>Nice going <strong><?php echo $firstname ?></strong>!!</p>
   
   <p>I see that you've reached the end of Lab 2.  In order to go on and do the rest of the class you'll need to proceed with payment with PayPal.  If you don't have a PayPal account that's no big deal because you can pay with any card.  You don't even have to pay right now if you prefer to use PayPal's Bill Me Later option.</p>
   
   <p>I know your email address is <strong><?php echo $email ?></strong> so I won't ask again but please fill out this little form to continue on with the class.</p>
   



   <form method="post" name="register" id="register" action="app/controllers/register.php" class="form-horizontal">
   

   
   
   
   
   
   
            <div class="control-group">
                  <label class="control-label" for="inputLastName">Last Name</label>
                  <div class="controls">

<div class="input-prepend">
<span class="add-on"><i class="icon-pencil"></i></span>

                    <input type="text" id="inputLastName" name="lastName" value="<?php echo '' ?>" placeholder="Last Name">
</div>
                  </div>
                </div>
                
                
                
            <div class="control-group">
                  <label class="control-label" for="didYouHear">How Did You Head About  My Class?</label>
                  <div class="controls">

<div class="input-prepend">
<span class="add-on"><i class="icon-pencil"></i></span>


                    
                    <select name="found" id="didYouHear">
                    <option value="">Choose One</option>
                          <option value="Member Benefit">Association Program</option>
                                <option value="Adult Ed">Adult Education</option>
                                      <option value="Google">Google</option>
                                            <option value="Other">Other</option>
                    </select>
</div>
                  </div>
                </div>
                
                
                    <div class="form-inline">
<p>Do you accept the <a href="frontoffice/tos.html" target="_blank">Terms Of Service</a>?</p>
  <label class="checkbox">Yes
    <input type="checkbox" name="tos" value="yes" checked> 
</label>  

</div>


    <div class="control-group nudgePadTop20">
    <div class="controls">
    <button type="submit" name="submit" value="" class="btn btn-primary"><i class="icon-user icon-white"></i> You're Getting Th re!!</button>
    </div>
    </div>
  
      

   </form>
   
<!--   </div>
   </div>
   </div>
-->

       </section>


      <?php include("includes/footer.php"); ?>
   </div> <!-- end wrapper -->
   
   
         
<!--           Last Name:
           <input type="text" name="lastname" value="<?php echo '' ?>" />-->
     
<!--         How Did You Find This Class?
            <input type="text" name="found" value="<?php echo '' ?>" />-->
      
   
<!--            Accept TOS?
         <input type="checkbox" name="tos" value="<?php echo '' ?>" /> -->
     
<!--     <input type="submit" name="submit" value="Submit" />-->
       
</body>

</html>
