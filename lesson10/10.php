<!DOCTYPE html>

<html>


<head>

<title>Lesson 10:  A Look At CSS</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">


 <h1>Lesson 10: A Look At CSS</h1>
 
<p class="introduction"> Way back in the first Lesson, I told you about the separation of structure from style.   That's all about the roles that HTML and CSS play in web page design.  </p>

<p>HTML, as you surely must know by now, has the responsibility of web document
  structure, giving meaning to content through the use of the tags. It is the
  tags that makes raw content into paragraphs, headings, sections, list items,
  etc.  </p>

<p>CSS handles all of the styling requirements of a page.</p>

<p>When you think of it, everything has this dichotomy between structure and style. From the buildings we occupy to the clothes we wear, there is a divide  between the form and the way the form is styled. </p>

<p>Take that building. The roof, basement, walls and floors make up its structure.
  Once the structure is finished, things like floor finishings, window treatments
  and the like can be applied - like a skin - to the structure.</p>
<p>Guess what? That is exactly how CSS works. CSS is a companion to HTML and
  attaches (really) to the HTML just as if a web page were a building.</p>

<p>So it is with web page design.
</p>



<p id="learn">In this lesson we'll go over:</p>

	<ul id="highlights">
     <li>How CSS Works</li>
<li>How CSS Attaches To HTML</li>
<li>Five  Things I'm Dying To Tell You About CSS</li>
<li>In My Garden: All Dressed Up With CSS and Ready To Go</li>

    
    

</ul>
<p id="cute_line">Going Out With Style!!</p>


<a id="next" href="20.html">The Mystery Of CSS Revealed</a>


</section>


<?php include("../includes/sidebar.php");
print_sidebar(10,1);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>





