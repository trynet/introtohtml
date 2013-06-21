<!DOCTYPE html>

<html>


<head>

<title>Front Office</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php
include("../includes/header.php");
?>

<div class="clearfix">

<section id="main">


<h1>Bookstore</h1>


<img src="../images/bookstore_banner_small.gif" alt="Illustration of Books on a Shelf" id="bookstore" />

<p>I store a pretty good selection of web design books at the Bookstore in my
  Joy Of Code site.  </p>
<p>Go through the front door of my <a href="http://www.joyofcode.com/books">Bookstore</a></a> or
  just wander down these isles:</p>
<ul>
  <li><a href="http://www.joyofcode.com/books/web-design-books-on-xhtml-html">HTML Books</a></li>
  <li><a href="http://www.joyofcode.com/books/web-design-bopoks-on-css">CSS Books</a></li>
  <li><a href="http://www.joyofcode.com/books/web-design-books-on-fonts-and-typography">Fonts And Typography Books</a></li>
  <li><a href="http://www.joyofcode.com/books/web-design-books-on-programming">Programming Books</a></li>
  <li><a href="http://www.joyofcode.com/books/web-design-books-on-everything-else">Other Books</a></li>
</ul>




</section>

      <!--#include virtual="../../../cgi-bin/incl_frontoffice_sidebar.pl" -->

<?php
include("side_bar.php");
?>

</div>  <!-- ned clearfix -->

   


<?php
include("../includes/footer.php");
?>



</div> <!-- end wrapper -->

</body>

</html>



