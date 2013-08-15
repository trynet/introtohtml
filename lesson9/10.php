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


 <h1 class="page-header">Lesson 9: Grouping Elements</h1>

<p class="introduction lead">Truth be told you've been using HTML elements to group content all along. While this lesson will show you many new grouping elements, the idea should be nothing new to you.</p>

<p>Grouping is what fortifies the structure of your web docs. You saw a little
  of that in the last lesson when I showed you thead, tbody and tfoot. You've
  also seen it in  list markup as the ul and ol elements were used to group
  list items. While you don't necessarily need to group elements like what you
  will see here, I strongly urge that you do so. It's one of the things that separates people who know HTML from those that don't.</p>

<p>So here's another truth to tell. So far as I recall, if you look at the specs
  on HTML (or XHTML) there is no technical thing as &quot;grouping&quot;. However,
  I do recall that the best practices in using markup is to use HTML to define
  content by grouping. It makes so much sense to me.</p>
<p>Besides, you will be richly rewarded by using these grouping elements when
  you go on to learn Cascading Style Sheets. I'll get into that story when you
  go on to learn CSS.</p>

<p>Many of these elements in this lesson are new to HTML and are part of the
  HTML5 specs. If you are familiar with the div tag - which has done the heavy
  lifting of grouping HTML elements for years - you'll see the reduced role div
  will play in the future. And that's a good thing!!</p>

<p id="learn">In this lesson we'll go over:</p>

	<ul class="nav">
     <li><i class="icon-ok PadRight5"></i>General Grouping Tags</li>
<li><i class="icon-ok PadRight5"></i>What About div And span?</li>
<li><i class="icon-ok PadRight5"></i>Form Group Tags</li>
<li><i class="icon-ok PadRight5"></i>Data Table  Grouping Tags</li>
</ul>

<p>When you add these new elements to your pages in the Lab, please take note of the HTML outlines I did for all five pages.  There you will see the sequencing of the tags which is most important for understanding the nature of your web documents and for working effectively with CSS.</p>

    
    

</ul>
<p id="cute_line">Containing Containers!!</p>


<a id="next" href="20.html">Time To Learn About Using Grouping Elements</a>


</section>


<?php include("../includes/sidebar.php");
print_sidebar(9,1);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>





