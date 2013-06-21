<!DOCTYPE html>

<html>


<head>

<title>Lesson 9: Grouping Elements</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 9: Grouping Elements</a> </li>
</ul>

 <h1>What About div And span?</h1>
 

<p>There can be little doubt that one of the mainstays of HTML - the div element
  - will play a less prominent role as the new grouping elements take over. </p>

<p>The div tag (short for division) was and is used to divide content into sections.
  It's nondescript name has always been misunderstood leading to its misuse.
  For years I've told students it would have been better had the tag been called
  &quot;grp&quot;, short for group, because that's what it does - group content.</p>
  
  <p>But we finally have great tags - like header, footer, section, aside and
    article to a name a few that do the job of defining content. Gone should
    be  the days when we used <code>&lt;div id=&quot;header&gt;</code>, <code>&lt;div
    id=&quot;footer&quot;&gt;</code> and <code>&lt;div
    id=&quot;container&quot;&gt;</code> as the only way to define a header, footer
    and a section of a page. <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code> and <code>&lt;section&gt;</code> is
    the way to go because they aptly define content. </p>
 
 <h2>How should the div element be used?</h2>
 <p>Use the div tag as a last resort. When no specific tag exists, it's perfectly
   fine to use a div. </p>
 <h2>What is the span tag?</h2>
 <p>I've always thought of <code>&lt;span&gt;</code> as <code>&lt;div&gt;</code>'s
   opposite in that the span tag is an inline element whereas the div tag is
   a block box. There really isn't a lot of use for <code>&lt;span&gt;</code> until
   you get to working with CSS. The span element is used much like <code>&lt;em&gt;</code>, <code>&lt;strong&gt;</code>,
   <code>&lt;a&gt;</code> and <code>&lt;img /&gt;</code> as all of them- being inline elements - will be
   within a block-level element.</p>
 <p>Here's a 
   little <a href="../lesson2/60.html">refresher on block and inline elements</a>.</p>
 
 



<a id="next" href="40.html">Keep Learning!!</a>


</section>


<?php include("../includes/sidebar.php");
print_sidebar(9,3);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>




