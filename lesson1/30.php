<!DOCTYPE html>

<html>

<head>

<title>Lesson 1: The Basics > Starting an HTML Document</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />


</head>

<body>

<div id="wrapper">

<?php include( "../includes/header.php" ); ?>

<div class="clearfix">

<section id="main">


<ul id="breadcrumbs">
<li><a href="10.html">Lesson 1: The Basics</a></li>
</ul>


<h1>Starting an HTML Document</h1>


<p>An HTML file uses the <strong>ASCII (plain text) file format</strong>. That
  means you'll be using basic text editors, such as Notepad for Windows or TextEdit
   for Mac, when creating your HTML files for this class.</p>

   <p>A web page is created using tags which allow web browsers to display

          the HTML file as a web page. Each tag starts with a "&lt;" and

always

          ends with a "&gt;".</p>

        <p>HTML  is a <strong>containerized markup system</strong>, that is,
          each tag is a

set

          that has a start tag (such as <code>&lt;body&gt;</code>) and an

end

          tag (in this case, <code>&lt;/body&gt;</code>). Notice the "/"

which

          indicates an end tag.</p>



    <p>Tags are made up of elements and attributes which are what we use

to

          create web pages with HTML. More on this is coming up soon.</p>



        
<p>HTML uses lowercase and does not allow content creators to just slop code around and expect to have a page that will work the way it is supposed to for everyone on a broad array of platforms and devices.
</p>

<p>Getting your code right matters and is a huge part of what this class is about!!</p>


<a id="next" href="40.html">Don't Stop Now. Next Page Please</a>



</section>

<?php 
include("../includes/sidebar.php"); 
print_sidebar(1,3);
?>

</div>  <!-- ned clearfix -->

<?php
include("../includes/footer.php");
?>


</div> <!-- end wrapper -->

</body>

</html>

