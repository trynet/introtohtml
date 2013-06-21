<!DOCTYPE html>


<html>


<head>



<title>Joy Of Code: Intro To HTML -  Home Room</title>


<link rel="stylesheet" href="styles/styles.css" />


<style type="text/css">

section#main
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

<?php
include("includes/header.php");
?>

<div class="clearfix">


<section id="main">

<div id="montreal">
<img src="images/montreal.jpg"  alt="Skyline of Montreal" />

<p>The skyline of Montreal (and Quebec) is what I will be looking at from June
  27 - July 3). Just had to get away from it all for a few days and attend the
  Jazz Festival. That means I will not be checking in or doing any reviews during
  that time. Sorry for the inconvenience this may cause you.</p>
  
  <hr style="clear:both;" />

</div>



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



<?php
include("includes/footer.php");
?>


</div> <!-- end wrapper -->

</body>

</html>

