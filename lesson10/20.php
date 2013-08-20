<!DOCTYPE html>

<html>


<head>

<title>Lesson 10: A Look At CSS</title>

<meta charset="utf-8" />

   <link rel="icon" href="../images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="../images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="../images/favicon.png" type="image/png"/>

   <link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 10: A Look At CSS</a> </li>
</ul>

 <h1>How CSS Works</h1>
 
 <img src="../images/sheets_cascade.gif"  id="sheets"  alt="Diagram of the 3 Browser, User and Designer Style Sheets" />

<p>Cascading Style Sheets (CSS) is what gives style to a web page. It is the
  system, being developed by the World Wide Web Consortium (W3C), that allows
  us to define the appearance, layout and typography – the look and feel
  – of a web page.</p>

<p>The very words “Cascading Style Sheets” define exactly what CSS is and how it works.</p>

<p>Style Sheets? In a web browser that’s a distinct group of rules used to set the style of a web page. In a web browser, there are 3 style sheets just like you see in this image. The Browser Style Sheet, User Style Sheet and the Designer Style Sheet. Each of those style sheets have style rules that deal with setting a page’s background color, font size, family and color, padding, border and margin and so much more!!</p>

<p>Cascade? That’s the mechanism (it’s really an algorithm) built into every browser. It’s purpose is to rank the style rules in the style sheets and assign each style rule a value. The ones with the highest values result in style rules which are honored, meaning style rules that influence how a page looks.</p>
 
 <h2>Let Me Show You</h2>
 <p>Here's a video where I show you exactly what I mean by Browser, User and
   Designer Style Sheets.</p>
   
   
   
   
   
   <object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/vqqwV-fELuI?version=3&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/vqqwV-fELuI?version=3&amp;hl=en_US" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
   
   
 <p>Video To go here showing the 3 style sheets.</p>


 
 <p><a id="next" href="30.html"> Take A
    Nap But Then Go On</a></p>
</section>


<?php include("../includes/sidebar.php");
print_sidebar(10,2);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>





