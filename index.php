<?php
require_once 'app/config/config.php';
// echo '<pre>auth<br>'; print_r($_SESSION); die; ?>

<!DOCTYPE html>
<html>
<head>
   <title>Joy Of Code: Intro To HTML -  Home Room</title>
   <link rel="stylesheet" href="styles/styles.css" />
   <style type="text/css">
      ection#main
      {width:800px;
      float:none;
      margin:20px auto;}

      hr
      {visibility:hidden;}

      div#montreal
      {width:80%;
      margin: 0 auto;}

      div#montreal img
      {float:left;
      padding:10px;
      margin:0 15px ;
      border:1px black solid;}
   </style>
</head>

<body>
   <div id="wrapper">
      <?php include("includes/header.php"); ?>

      <div class="clearfix">
         <section id="main">
            <h1 id="home">Home Room</h1>

            <?php include( "includes/schedule.php" ); ?>

            <hr style="clear:both;" />

            <?php include("includes/appendix.php"); ?>

            <h2>And In The End</h2>

            <p>This is what you are making, one lab at a time but these files include CSS.</p>

            <ul>
              <li><a href="project/">In My Garden</a>
              </li>
            </ul>
         </section>
      </div>  <!--  end clearfix -->

      <?php include("includes/footer.php"); ?>
   </div> <!-- end wrapper -->
</body>

</html>
