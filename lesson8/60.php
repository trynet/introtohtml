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

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 8: Data Tables</a> </li>
</ul>

 <h1>thead, tbody And tfoot</h1>
 <p>These 3 elements will give you a glimpse into the next lesson. There,
   we will see how grouping elements further the concept that html is like grammar
   in that its purpose is about giving meaning to content. I could have waited
   till then to introduce you to <code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code> and <code>&lt;tfoot&gt;</code> (no,
   they are not the  Three Stooges of HTML). I didn't. You'll get to use them
   in the final lab but I'm explaining what they do right here, right now.</p>
 <p>First, let me show you how using these three elements changes the way your
   table looks. (I've lifted this example straight off of the lab that you are
   about to do).</p>

 <p class="exs">Example Of A Table That Uses The thead, tbody And tfoot Elements</p>
 
  <p>I <span class="nested">highlighted</span> these elements here just to make it easier to see how the rows
   have been grouped.</p>
 <p class="views2">Code View </p>
 <p><code>&lt;table&gt;<br>
     <span class="nested">&lt;thead&gt;</span><br>
   &lt;tr&gt;<br>
   &lt;th&gt;</code>Denomination<code>&lt;/th&gt;<br>
   &lt;th&gt;</code>pH range<code>&lt;/th&gt;<br>
   &lt;/tr&gt;<br>
   <span class="nested">&lt;/thead&gt;<br>
   &lt;tbody&gt;</span><br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Ultra acid<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>3.5<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Extremely acid<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>3.5 - 4.4<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Very strongly acid<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>4.5 - 5.0<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Strongly acid<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>5.1 - 5.5<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Moderately acid<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>5.6 - 6.0<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Slightly acid<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>6.1 - 6.5<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Neutral<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>6.6 - 7.3<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Slightly alkaline<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>7.4 - 7.8<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Moderately alkaline<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>7.9 - 8.4<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Strongly alkaline<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>8.5 - 9.0<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   &lt;tr&gt;<br>
   &lt;td&gt;</code>Very strongly alkaline<code>&lt;/td&gt;<br>
   &lt;td&gt;</code>9.0<code>&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   <span class="nested">&lt;/tbody&gt;<br>
   &lt;tfoot&gt;</span><br>
   &lt;tr&gt;<br>
   &lt;td colspan=&quot;2&quot;&gt;Source: &lt;a href=&quot;http://en.wikipedia.org/wiki/Soil_pH&quot;&gt;</code>Soil
   pH<code>&lt;/a&gt;.&lt;/td&gt;<br>
   &lt;/tr&gt;<br>
   <span class="nested">&lt;/tfoot&gt;</span><br>
   &lt;/table&gt;</code></p>
 <p class="views2">Browser View</p>
 
 <table class="lesson8">
<thead>
<tr>
<th>Denomination</th>
<th>pH range</th>
</tr>
</thead>
<tbody>
<tr>
<td>Ultra acid</td>
<td>3.5</td>
</tr>
<tr>
<td>Extremely acid</td>
<td>3.5 - 4.4</td>
</tr>
<tr>
<td>Very strongly acid</td>
<td>4.5 - 5.0</td>
</tr>
<tr>
<td>Strongly acid</td>
<td>5.1 - 5.5</td>
</tr>
<tr>
<td>Moderately acid</td>
<td>5.6 - 6.0</td>
</tr>
<tr>
<td>Slightly acid</td>
<td>6.1 - 6.5</td>
</tr>
<tr>
<td>Neutral</td>
<td>6.6 - 7.3</td>
</tr>
<tr>
<td>Slightly alkaline</td>
<td>7.4 - 7.8</td>
</tr>
<tr>
<td>Moderately alkaline</td>
<td>7.9 - 8.4</td>
</tr>
<tr>
<td>Strongly alkaline</td>
<td>8.5 - 9.0</td>
</tr>
<tr>
<td>Very strongly alkaline</td>
<td>9.0</td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="2">Source: <a href="http://en.wikipedia.org/wiki/Soil_pH">Soil pH</a>.</td>
</tr>
</tfoot>
</table>
 <p>Fooled you, didn't I? These elements don't do anything to affect the way
   a table looks and that's just as it should be. These elements, like all
   of HTML define the three sections of my table  - a head part, a body
   part (oops, better be careful with that one) and a foot part.</p>
 <p>Do you have to use these elements? No, but you will be missing out on best
   markup practices for your web pages. These elements fortify  the structure
   of
   data tables. Plus, as you will
   see with CSS, any
   HTML
   element can be styled. Using these three elements gives designers more options
   in ways to style tables.</p>
 
 


<a id="next" href="../lab8.html">You Are Now Ready For Your Next Lab - First Data Tables</a>


</section>



<?php include("../includes/sidebar.php");
print_sidebar(8,6);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>






