<!DOCTYPE html>

<html>


<head>

<title>Lesson 3: Lists > Ordered Lists</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>

<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 3: Lists</a></li>
</ul>


<h1>Ordered Lists</h1>





        <p>To create an Ordered List (where the markers can be numbers), use
          the <code>&lt;ol&gt;</code>

          <code>&lt;/ol&gt;</code> container. Between the ol container use <code>&lt;li&gt;</code>

          <code>&lt;/li&gt;</code> for each list item.</p>



<p>The pattern is exactly the same as you just saw with Unordered

Lists.</p>

        <p class="exs">Example of an Ordered List</p>
        
<p class="views2">Code View</p>
<p><span class="indent"><code>&lt;ol&gt;</code> <br />
    <code>&lt;li&gt;</code>Asia<code>&lt;/li&gt;</code><br />
    <code>&lt;li&gt;</code>Africa<code>&lt;/li&gt;</code><br />
    <code>&lt;li&gt;</code>Europe<code>&lt;/li&gt;</code><br />
<code>&lt;/ol&gt;</code></span></p>
<p class="views2">Browser View</p>
<ol>
  <li>Asia</li>
  <li>Africa</li>
  <li>Europe  </li>
</ol>
<p>Now it's the li container (working under the direction of <code></code>

  ol) that makes the numbers followed by a period.</p>
<p>Use an <strong>Ordered List </strong>when the order of the list items is <strong>relevant</strong>.
  In this list, Asia is the most important continent, and Europe is the least
  important.</p>
  
  
<a id="next" href="40.html">Next Page Please</a>



</section>

<?php include("../includes/sidebar.php");
print_sidebar(3,3);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

