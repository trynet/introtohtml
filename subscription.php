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

</header>




         <section id="main" class="clearfix">
         

<p>So, how did you do, <strong><?php echo $firstname ?></strong>?</p>

<p>Wether you're waiting for me to review your firsts page or you're ready to go on now's a good time to let me subscribe you to my Joy Of Code Blog. That way you can read about my take on web and web design just about as fast as I can get it from brain to net. It's a good way to say in touch and a way to find out about classes that I actually teach in New York City if you're in the neighborhood. I go through spurts writing for my blog but if you don't like it you can unsubscribe and I'll still talk to you.</p>

<p><strong>Uncheck any of these if you do not want me to subscribe you to my blog where I write about these subjects:</strong></p>


      <form action="app/controllers/subscription.php" method="post" name="">


  <label class="checkbox">HTML
    <input type="checkbox" name="html" value="HTML"  checked> 
</label>  

<br />
<br />


  <label class="checkbox">CSS
    <input type="checkbox" name="css" value="CSS" checked> 
</label>  

<br />
<br />

<label class="checkbox">WordPress
    <input type="checkbox" name="wordpress" value="WordPress" checked> 
  </label>  


<br /><br />

    <button   type="submit" class="btn btn-primary"><i class="icon-home icon-white"></i> Back Home</button>





      </form>


       </section>


      <?php include("includes/footer.php"); ?>
   </div> <!-- end wrapper -->
   
   
         

       
</body>

</html>
