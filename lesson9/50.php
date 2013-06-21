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

 <h1>Data Table  Grouping Tags </h1>
 <p>Like forms, data tables can present usability and accessibility issues for
   web visitors. In a table with many rows and columns it's easy for a user
   to become confused. Think of a train schedule and you can see how a user can
   lose focus with the row and/or column heading information.</p>
 <p>Just  like forms, grouping data in a table can go along way towards making
   a table more user-friendly. While I don't show you everything you will ever
   need to  make a complex table easier to understand, these grouping elements
   are a real good start.</p>
 <p>Remember, all kinds of people need to be able to complete a form or traverse
   a data table. Your job is to make that as easy to do as possible!!</p>
 
 <h2>The thead, tbody and tfoot Elements</h2>
 
 <p>These triplets come in very handy when defining row content in a data table.
   Like most of the tags in this section you won't see a difference in Browser
   View when using them but as with all HTML elements each of these can be styled
   with CSS. When you do that you certainly will see how these elements can be
   used to reach a great visual effect.</p>
 <p>Here's what I've said about <a href="../lesson8/60.html">thead, tbody and tfoot</a> if you need a refresher.</p>

 
 <h2>The colgroup and col Elements</h2>
 
 <p>When you think of it there is no good way to define columns in a data 
    table unless you use the <code>&lt;colgroup&gt;</code> and <code>&lt;col /&gt;</code> elements. </p>
 <p>This is a very simple example where I use these elements to group the data
   into three columns.</p>
 <p class="views2">Code View</p>
 <p><code>&lt;table&gt;</code></p>
 <p><code><span class="second">&lt;colgroup&gt;<br>
   &lt;col id=&quot;column1&quot; /&gt;<br>
   &lt;col id=&quot;column2&quot; /&gt;<br>
   &lt;col id=&quot;column3&quot; /&gt;<br>
   &lt;/colgroup&gt;<br>
 </span></code></p>
 <p><code>&lt;tr&gt;<br>
   &lt;th&gt;</code>Breakfast<code>&lt;/th&gt;<br>
   &lt;th&gt;</code>Lunch<code>&lt;/th&gt;<br>
   &lt;th&gt;</code>Dinner<code>&lt;/th&gt;<br>
   &lt;/tr&gt;</code></p>
 <p><code>&lt;tr&gt;<br>
   &lt;td&gt;</code>$4.25<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>$7.98<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>$23.89<code>&lt;/td&gt;<br>
   &lt;/tr&gt;</code></p>
 <p><code>&lt;tr&gt;<br>
   &lt;td&gt;</code>$17.85<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>$27.86<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>$50.43<code>&lt;/td&gt;<br>
   &lt;/tr&gt;</code></p>
 <p><code>&lt;/table&gt;</code></p>
 <p class="views2">Browser View</p>
 
 <table class="lesson8">

<colgroup>
<col id="column1" />
<col id="column2" />
<col id="column3" />
</colgroup>


<tr>
<th>Breakfast</th>
<th>Lunch</th>
<th>Dinner</th>
</tr>

<tr>
<td>$4.25</td>
<td>$7.98</td>
<td>$23.89</td>
</tr>

<tr>
<td>$17.85</td>
<td>$27.86</td>
<td>$50.43</td>
</tr>

</table>


<ol>
<li>You won't see anything different with  this table just because I used <code>&lt;colgroup&gt;</code>
  and <code>&lt;col /&gt;</code> but were I to use CSS I certainly could have
  changed the visual appearance of the table to highlight the columns.</li>
<li>The <code>id</code> attribute is used to identify each column, Since each
  column has
  a unique identifier (column1, column2 and column3 which I arbitrarily named). I can use CSS to style each column separately. (Oh, I'm getting ahead of myself. We
  are not at Lesson 10 - A Look At CSS yet.)</li>
<li>I could have used <code>&lt;caption&gt;</code> and the thead and tbody  
  elements for this table but I left them out so you'd focus on these two new
  elements.</li>


</ol>


 <p><a id="next" href="../lab9.html">You Are Now Ready For Your Last Lab - First Grouping</a></p>
</section>



<?php include("../includes/sidebar.php");
print_sidebar(9,5);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>


