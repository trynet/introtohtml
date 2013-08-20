<!DOCTYPE html>

<html>


<head>

<title>Lesson 8: Data Tables</title>

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
<li><a href="10.html">Lesson 8: Data Tables</a> </li>
</ul>

 <h1>The th Tag</h1>
 <p>When a cell contains header information it's best to use the th element
   instead of a td tag.</p>
 <p><span class="exs">Example of a Table That Has Header Info In The First Row</span></p>
 <p class="views2">Code View</p>
 <p><code>&lt;table&gt;</code><br />
   <code>&lt;tr&gt;</code><br />
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
 
<table  class="lesson8">
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

<h2>The th Element Can Be Used For Header Info That Is In the First Cell Of Each
  Row</h2>


<p class="views2">Code View</p>
<p><code>&lt;table&gt;<br />
&lt;tr&gt; <br />
&lt;th&gt;</code>Cities In Ohio<code>&lt;/th&gt;<br />
&lt;td&gt;</code>Toledo<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Akron<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Canton<code>&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt; <br />
&lt;th&gt;</code>Cities In New York<code>&lt;/th&gt;<br />
&lt;td&gt;</code>Albany<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Rochester<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Buffalo<code>&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt; <br />
&lt;th&gt;</code>Cities In California<code>&lt;/th&gt;<br />
&lt;td&gt;</code>Palm Springs<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Bakersfield<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Yorba Linda<code>&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</code></p>



<p class="views2">Browser View </p>

<table  class="lesson8">



        <!-- style rule used to offset effect of external style rule -->

<tr>

            <th style="text-align:center;">Cities In Ohio</th>

            <td>Toledo</td>

            <td>Akron</td>

            <td>Canton</td>

          </tr>

          <tr>

            <th style="text-align:center;">Cities In New York</th>

            <td>Albany</td>

            <td>Rochester</td>

            <td>Buffalo</td>

          </tr>

          <tr>

            <th style="text-align:center;">Cities In California</th>

            <td>Palm Springs</td>

            <td>Bakersfield</td>

            <td>Yorba Linda</td>

          </tr>

        </table>


<a id="next" href="40.html">Tables Are Fun!!</a>


</section>



<?php include("../includes/sidebar.php");
print_sidebar(8,3);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>





