<!DOCTYPE html>

<html>

<head>

<title>Lesson 1: The Basics > What Is HTML?</title>

<meta charset="utf-8" />


   <link rel="icon" href="../images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="../images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="../images/favicon.png" type="image/png"/>

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

<h1>What is HTML?</h1>

        <p>I'll bet you've heard of HyperText Markup Language (HTML) and more
            to the point, you may have some idea what that is. You may know something
        about tags and other parts of  HTML.</p>

        <p>Perhaps you've heard of the <a href="http://www.w3c.org">World Wide
            Web Consortium</a>, a/k/a the W3C, which develops the standards of widely used Internet technologies. 
          Two of those standards happen to be HTML and CSS.</p>

        <p> There were several versions of HTML that were adopted in
          the 1990s. Then came XHTML (Extensible Hyper Text Markup Language)
          which was the standard of the first decade of the 21st century. Now
    we are back with a new and expanded version of HTML - HTML5. </p>

        <p>Is that important to you? For many people who make web sites
          the answer is &quot;no&quot; because the practical differences are insignificant.
          Whether you are writing HTML or XHTML, the general rules and the purpose
          of both are essentially the same.</p>

<p>The part of HTML that we will be learning is not a programming language. I
  think of it as a text markup system comprised of the rules to create web page structure.</p>

<p>An  important feature of HTML is that it is backwards and forwards compatible.
   It works  well in older browsers and is well suited to handle the needs of future
          technologies. These future technologies will need well-formed (well-made)
          documents which is what a good web page is after all.</p>

        <p><strong>By creating a valid and well-formed HTML document, your file
            will be accessible to the largest possible audience.   In addition,
            it will serve the requirements for print, audio output, mobile
            devices, and whatever else the future brings.</strong></p>
          

<a id="next" href="30.html">Page 3, Right This Way</a>

</section>

<?php 
include("../includes/sidebar.php"); 
print_sidebar(1,2);
?>

</div>  <!-- ned clearfix -->

<?php
include("../includes/footer.php");
?>


</div> <!-- end wrapper -->

</body>

</html>
