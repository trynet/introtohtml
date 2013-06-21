<!DOCTYPE html>

<html>


<head>

<title>Lesson 3: Lists > Unordered Lists</title>

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


<h1>Unordered Lists</h1>


        <p>To create an Unordered List (a list with bullet markers), use the <code>&lt;ul&gt;</code><code> &lt;/ul&gt;</code> container.
          Between the ul container use <code>&lt;li&gt;</code> 

<code>&lt;/li&gt;</code> for each list item.</p>

        <p>The ul stands for Unordered List and li means List Item. Easy enough.</p>
        
        <p class="exs">Example of an Unordered List</p>
        
             <p class="views2">Code View</p>



<code>&lt;ul&gt;</code> <br />

 <code>&lt;li&gt;</code>Asia<code>&lt;/li&gt;</code><br />

 <code>&lt;li&gt;</code>Africa<code>&lt;/li&gt;</code><br />

 <code>&lt;li&gt;</code>Europe<code>&lt;/li&gt;</code><br />

 <code>&lt;/ul&gt;</code> 
 
 
        <p class="views2">Browser View</p>
<ul>

<li>Asia</li>



<li>Africa</li>



<li>Europe</li>

</ul>
        <p>It's the li container (working under the direction of 

          the ul container) that makes bullets.</p>
        <p>Use an <strong>Unordered List </strong>when the order of the list
          items is <strong>not relevant</strong>. In this list, the continents
          could have been listed in any order.</p>
          

<a id="next"  href="30.html">Page 3, Right This Way</a>


</section>

<?php include("../includes/sidebar.php");
print_sidebar(3,2);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

