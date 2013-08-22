<?php
require_once 'app/config/config.php';
echo '<pre>'; print_r($DEBUG); echo '</pre>';
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
         
         <p>So far so good, <strong><?php echo $firstname ?></strong>?</p>

<p>Whaddya say? How about if I subscribe you to my Joy Of Code Blog. That way you can read about my take on  web and web design just about as fast as I can get it form brain to net. It's a good way to say in touch and a way to find out about classes that I actually teach in New York City if you're in the neighborhood.  I go through spurts writing for my blog but if you don't like it you can unsubscribe and I'll still talk to you!!</p>




      <form action="app/controllers/subscription.php" method="post" name="">
        
  

               HTML
               <input type="checkbox" name="SubscribeBlog[]" value="HTML" id="html" /></td>
 
               CSS
               <input type="checkbox" name="SubscribeBlog[]" value="CSS" id="css" />

               WordPress
            <input type="checkbox" name="SubscribeBlog[]" value="WordPress" id="wordpress" />
         
            <input type="submit" name="submit" value="Submit" />
      
      </form>


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
