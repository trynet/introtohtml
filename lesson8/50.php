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

 <h1>Spanning Multiple Rows And Columns </h1>
 <p>So far you've seen pretty simple tables that are useful but are limited.
   To leverage some of their power, you'll have to learn how to span a cell over
   a column or row. This is where things can get mighty interesting.</p>
 <h2>The colspan Attribute</h2>
 <p>To span a cell over multiple columns (cells) use the td (or th) attribute
   <code>colspan</code>.</p>
 <p class="exs">Example of a Table Using Colspan</p>
 
 <p class="views2">Code View</p>
 <p><code>&lt;table&gt;<br />
&lt;tr&gt;<br />
&lt;th colspan="3"&gt;</code>Computer Makers<code>&lt;/th&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;</code>Dell<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Apple<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Gateway<code>&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;</code>IBM<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Compaq<code>&lt;/td&gt;<br />
&lt;td&gt;</code>HP<code>&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</code></p>

 <p class="views2">Browser  View</p>
 
 
<table   class="lesson8">

<!-- style rule used to offset effect of external style rule -->

<tr>

<th style="text-align:center;" colspan="3">Computer Makers</th>

        </tr>

          <tr><td>Dell</td><td>Apple</td><td>Gateway</td>

          </tr>

          <tr><td>IBM</td><td>Compaq</td><td>HP</td>

          </tr>

      </table>
 
 <p>The first row is spanning 3 columns. I did that using <code>colspan="3"</code> as
   a td attribute. Actually, I used th and not td, since what I have is the heading
   of a table.</p>
 <h2>The rowspan Attribute</h2>
 <p>To span a cell across multiple rows (cells) use the td (or th) attribute
   <code>rowspan</code>.</p>
 <p class="exs">Example of a Table Using Rowspan</p>
 <p class="views2">Code View</p>
 <p><code>&lt;table&gt;<br />
&lt;tr&gt;<br />
&lt;th rowspan="2"&gt;</code>Computer Makers<code>&lt;/th&gt;<br />
&lt;td&gt;</code>Dell<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Apple<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Gateway<code>&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;</code>IBM<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Compaq<code>&lt;/td&gt;<br />
&lt;td&gt;</code>HP<code>&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;</code></p>
 <p class="views2">Browser View</p>
 
<table   class="lesson8">

          <!-- style rule used to offset effect of external style rule -->

          <tr>

<th style="text-align:center;" rowspan="2">Computer Makers</th>

<td>Dell</td>

<td>Apple</td>

<td>Gateway</td>

</tr>



<tr>

<td>IBM</td>

<td>Compaq</td>

<td>HP</td>

</tr>

</table>

            <ol>

                                        <li>
                                             <p>The first cell in the first row spans the 2 rows. This was

                  accomplished using <code>&lt;th rowspan="2"&gt;</code> in the

                  Computer Makers cell.

</p>
                                        </li>
                                        
                                                              <li>
                                             <p>Rowspan and Colspan can be used
                                          in the same table.</p>
                                        </li>

</ol>



<p><a id="next" href="60.html">Some Tags You Just May Not Know</a></p>
</section>


<?php include("../includes/sidebar.php");
print_sidebar(8,5);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>






