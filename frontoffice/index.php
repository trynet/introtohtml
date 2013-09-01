<?php
require_once '../app/config/config.php';
?>


<!DOCTYPE html>

<html>


<head>

<title>Front Office</title>

<meta charset="utf-8" />

   <link rel="icon" href="../images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="../images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="../images/favicon.png" type="image/png"/>

   <link rel="stylesheet" href="../styles/styles.css" />


</head>

<body>

<div id="wrapper">


<header>

<img src="/images/header.png"  alt="Joy Of Code Intro To HTML" />


<nav>
<ul class="nav nav-pills">

 <li><a href="/index.html"><i class="icon-home"></i>Home Room</a></li>
<li class="current"><a href="/"><i class="icon-info-sign"></i><strong>Front Office</strong></a></li>
<li><a href="/code_tester.html"><i class="icon-pencil"></i>Code Tester</a></li>
<li><a href="/workspace.php"><i class="icon-cog"></i>Work Space</a></li>
<li><a href="/logout.php"><i class="icon-off"></i>Sign Out</a></li>

</ul>
</nav> 

</header>



<div class="clearfix">

<section id="main">





<h1 id="home">Welcome <?php echo $firstname ?>!!</h1>


<p>You are in my Front Office,  the place to say and get things done that I don't elsewhere in Joy Of Code: Intro To HTML.</p>

<p>Here, among other things, I'm going to give you some help on how to successfully learn HTML in my class. So heads up and have fun! </p>

<p>It's not very often that you can have fun and learn something useful at the same time but you can here. I don't' call it the Joy Of Code for nothing. This just might change your life.</p>

<h2>Getting Started</h2>

<p>For most people - and that could mean you - the first two lessons and labs are free. So, if you haven't already, begin with Lesson 1. When you have finished reading that go to Lab 1 to do an ice breaker assignment - your first web page. If you've never done this before I think you'll find it very cool. You're going to use your browser and a text editor to accomplish that historic feat. </p>

<p>(If you've paid a third party the first two lessons won't be free but you got a discount so  you did get a break.)</p>

<p>Just go through the class one step at a time by reading a Lesson then doing a hands-on Lab that exercises what you have just read. It's very structured. It took me years to develop this and it works. Don't' skip anything and do everything in order and you should do really well. Hint: HTML is not a programming language or rocket science. How do I know? Trust me, I do.</p>

<p>You can go through this class at your speed much like reading a book. But if you need help with your Lab assignments it's really easy to let me know.</p>


</section>



<?php
include("side_bar.php");
?>

</div>  <!-- ned clearfix -->

   

<?php require( "../includes/footer.php" ); ?>


</div> <!-- end wrapper -->

</body>

</html>



