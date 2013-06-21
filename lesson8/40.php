<!DOCTYPE html>

<html>


<head>

<title>Lesson 8: Data Tables</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>


<div class="clearfix">

<section id="main">

 <h1>The caption Tag</h1>
 
 <ul id="breadcrumbs">
<li><a href="10.html">Lesson 8: Data Tables</a> </li>
</ul>
 
 <p>Any table can use the caption element to provide a title for your table.</p>
 <p><span class="exs">Example of a Data Table With a Caption</span></p>
 <p class="views2">Code View</p>
 <p><code>&lt;table&gt;</code></p>
 <p><code>&lt;caption&gt;</code>Bud's Business Meal Expenses for May<code>&lt;/caption&gt;</code></p>
 <p><code>&lt;tr&gt;</code><br />
   <code>&lt;th&gt;</code>Breakfast Costs<code>&lt;/th&gt;</code><br />
   <code>&lt;th&gt;</code>Lunch Costs<code>&lt;/th&gt;</code><br />
   <code>&lt;th&gt;</code>Dinner Costs<code>&lt;/th&gt;</code><br />
   <code>&lt;/tr&gt;</code><br />
   <code>&lt;tr&gt;</code><br />
   <code>&lt;td&gt;</code>$19.45<code>&lt;/td&gt;</code><br />
   <code>&lt;td&gt;</code>$24.22<code>&lt;/td&gt;</code><br />
   <code>&lt;td&gt;</code>$56.32<code>&lt;/td&gt;</code><br />
   <code>&lt;/tr&gt;</code><br />
   <code>&lt;tr&gt;</code><br />
   <code>&lt;td&gt;</code>$3.26<code>&lt;/td&gt;</code><br />
   <code>&lt;td&gt;</code>$32.44<code>&lt;/td&gt;</code><br />
   <code>&lt;td&gt;</code>$39.48<code>&lt;/td&gt;</code><br />
   <code>&lt;/tr&gt;</code><br />
   <code>&lt;/table&gt;</code></p>
   
   
 <p class="views2">Browser View</p>
 
<table   class="lesson8">

<caption>

 Bud's Business Meal Expenses for May</caption>



                <!-- style rule used to offset effect of external style rule -->

          <tr>

            <th style="text-align:center;">Breakfast Costs</th>

      <th style="text-align:center;">Lunch Costs</th>

      <th style="text-align:center;">Dinner Costs</th>

</tr>



<tr>

<td>$19.45</td>

            <td>$24.22</td>

            <td>$56.32</td>

</tr>



<tr>

<td>$3.26</td>

<td>$32.44</td>

<td>$39.48</td>

</tr>

</table>



        <p>


<a id="next" href="50.html">Making A Slightly More Complex Table</a>


</section>


<?php include("../includes/sidebar.php");
print_sidebar(8,4);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>






