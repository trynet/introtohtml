<!DOCTYPE html>


<html>


<head>



<title>Lab 8 - First Data Tables - Directions</title>



<meta charset="utf-8" />


   <link rel="icon" href="images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="images/favicon.png" type="image/png"/>

<link rel="stylesheet" href="styles/styles.css" />




</head>

<body>

<div id="wrapper">

<?php include("includes/header.php"); ?>

<div class="clearfix">

<section id="main">


<h1 class="lab-header">Lab 8: First Data Tables</h1>
<p>Tables are used to organize information in row and column format.</p>
  
<img src="images/peek.jpg" alt="Sneak A Peek " class="peek" />
  <p>In this lab we're only adding a table to the harvest and blog pages.
    Look at this <a href="labs/8/index.html" target="_blank">home
    page</a>. Still just a work in progress. But progress, none-the-less!!</p>
<h2>Step 1: Let's begin with the &quot;Vegetables And Their Due Dates&quot; table
  on the harvest page.</h2>
<p>Our table for the harvest.html page goes just after:</p>
<p><code>&lt;p&gt;</code>It would be nice to time the planting so that I could
  schedule the harvest. Maybe if I worked off a table like this I could do a
better job with planting so everything would ripen about the same time.<code>&lt;/p&gt;</code></p>
<p>It all starts with</p>
<p><code>&lt;table&gt; </code></p>
<p>and ends with </p>
<p><code>&lt;/table&gt;</code></p>
<p>and everything in the table goes inside of those tags. Simple enough and just
  like everything you already know about HTML.</p>
<p>So just after the opening table tag let's add a caption to our table. That's
  a pretty common thing to do.</p>
<p><code>&lt;caption&gt;</code>Vegetables And Their Due Dates<code>&lt;/caption&gt;</code></p>
<p>After the caption let's add in the thead section like this:</p>
<p><code>&lt;thead&gt;<br>
  &lt;tr&gt;<br>
  &lt;th&gt;</code>Vegetable<code>&lt;/th&gt;<br>
  &lt;th&gt;</code>Days To Maturity<code>&lt;/th&gt;<br>
  &lt;th&gt;</code>Date To Pick<code>&lt;/th&gt;<br>
  &lt;th&gt;</code>Yield<code>&lt;/th&gt;<br>
  &lt;/tr&gt;<br>
&lt;/thead&gt;</code></p>
<p><code>&lt;thead&gt;</code> is a used to group the first row as the head part of the table. Grouping
  is what we will get into in the next lesson but I thought I'd give you a grouping
  tag right here. Like anything to do with HTML it is used to build the structure
  of our page.</p>
<p>Inside <code>&lt;thead&gt;&lt;/thead&gt;</code> we have one row formed by the <code>&lt;tr&gt;</code> tag
  and four columns (cells) formed by the <code>&lt;th&gt;</code> element.</p>
<p>Don't copy and paste the above. Type out all the code. You can do it!! In
  fact, you have to do it!!</p>
<p>The next four rows make up the <code>&lt;tbody&gt;&lt;/tbody&gt;</code> section so let's just start
  with </p>
<p><code>&lt;tbody&gt;</code></p>
<p><code>&lt;/tbody&gt;</code></p>
<p>and have all four rows fit inside of that container.</p>
<p>The first row in the tbody section (that would be the second row of our table)
  goes like this:</p>
<p><code>&lt;tr&gt;<br>
  &lt;th&gt;</code>Early Girl<code>&lt;/th&gt;<br>
  &lt;td&gt;</code>90<code>&lt;/td&gt;<br>
  &lt;td&gt;</code>Aug 12<code>&lt;/td&gt;<br>
  &lt;td&gt;</code>8<code>&lt;/td&gt;<br>
&lt;/tr&gt;</code></p>
<p>This time we are using <code>&lt;td&gt;</code> rather than <code>&lt;th&gt;</code> as this
  is just a garden variety (get it - garden variety) table cell and not a heading
  cell which is what <code>&lt;th&gt;</code> is for.</p>
<p>OK, now let's see if you can do the last three rows. The pattern you will
  use is exactly as what I did for the row just completed.</p>
<p>Let me give you the data and you can complete each row.</p>
<p>For the  third row, the data, from the left cell to the right cell, is:</p>
<ol>
  <li>Supersonic Tomato</li>
  <li>110</li>
  <li>Sept 1</li>
  <li>15</li>
</ol>
<p>For the fourth row it's:</p>
<ol>
  <li>Breakfast Radish</li>
  <li>35</li>
  <li>June 17</li>
  <li>n/a</li>
</ol>
<p>And the final row is:</p>
<ol>
  <li>Zucchini</li>
  <li>50</li>
  <li>Jul 2</li>
  <li>15</li>
</ol>
<p>Just  as a reminder, this last row will go just before <code>&lt;/tbody&gt;</code>.</p>
<p>And the entire table finished with a <code>&lt;/table&gt;</code>.</p>
<p>All the principles of HTML are intact. For every open tag there is a close
  tag and the tags were closed in the reverse order in which they were opened.
  This table had one row that was inside the <code>&lt;/thead&gt;</code> section with the rows that
  followed all inside of the <code>&lt;tbody&gt;</code> section.</p>
<p>Check my source code if you haven't already and then, of course, validate
   this page.</p>
<h2>Step 2: Now that we know how to make a table let's add the two tables for
  the blog page.</h2>
<p>We'll begin with the table that concerns pH soil factors for my garden. This
  table is a lot like what you did for the harvestpage but I didn't use a caption.
  I  used <code>&lt;thead&gt;</code> and <code>&lt;tbody&gt;</code> and this
  time I added in <code>&lt;tfoot&gt;</code>  which
  I wrapped around  the last row.</p>
<p>Our table has 2 columns and 13 rows.</p>
<p>Just after</p>
<p><code>&lt;p&gt;</code>Here is a table of pH factors I found while doing some research for this article that will help explain all of this.<code>&lt;/p&gt;</code></p>
<p>type in </p>
<p><code>&lt;table&gt;</code></p>
<p>to get the ball rolling.</p>
<p>Then add the thead section like this which contains our first row:</p>
<p><code>&lt;thead&gt;<br>
  &lt;tr&gt;<br>
  &lt;th&gt;</code>Denomination<code>&lt;/th&gt;<br>
  &lt;th&gt;</code>pH range<code>&lt;/th&gt;<br>
  &lt;/tr&gt;<br>
&lt;/thead&gt;</code></p>
<p>Now, here's the data for the next eleven rows. All of these rows will go inside
  of <code>&lt;tbody&gt;</code> and <code>&lt;/tbody&gt;</code>. Don't forget, the rows start and end with <code>&lt;tr&gt;</code> and <code>&lt;/tr&gt;</code> and
  the cells inside of the each row start with <code>&lt;td&gt;</code> and end
  with <code>&lt;/td&gt;</code>.</p>
<table width="100%" border="0">
  <caption>
    Use This Data For The pH Factors Table
  </caption>
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">Left Cell</th>
    <th scope="col">Right Cell</th>
  </tr>
  <tr>
    <th scope="row">2nd Row</th>
<td>Ultra acid</td>
<td>3.5</td>
  </tr>
  <tr>
    <th scope="row">3rd Row</th>
<td>Extremely acid</td>
<td>3.5 - 4.4</td>
  </tr>
  <tr>
    <th scope="row">4th Row</th>
<td>Very strongly acid</td>
<td>4.5 - 5.0</td>
  </tr>
  <tr>
    <th scope="row">5th Row</th>
<td>Strongly acid</td>
<td>5.1 - 5.5</td>
  </tr>
  <tr>
    <th scope="row">6th Row</th>
<td>Moderately acid</td>
<td>5.6 - 6.0</td>
  </tr>
  <tr>
    <th scope="row">7th Row</th>
<td>Slightly acid</td>
<td>6.1 - 6.5</td>
  </tr>
  <tr>
    <th scope="row">8th Row</th>
<td>Neutral</td>
<td>6.6 - 7.3</td>
  </tr>
  <tr>
    <th scope="row">9th Row</th>
<td>Slightly alkaline</td>
<td>7.4 - 7.8</td>
  </tr>
  <tr>
    <th scope="row">10th Row</th>
<td>Moderately alkaline</td>
<td>7.9 - 8.4</td>
  </tr>
  <tr>
    <th scope="row">11th Row</th>
<td>Strongly alkaline</td>
<td>8.5 - 9.0</td>
  </tr>
  <tr>
    <th scope="row">12th Row</th>
<td>Very strongly alkaline</td>
<td>9.0</td>
  </tr>
</table>
<p>The last row - in this case it's the footer row - will go inside of <code>&lt;tfoot&gt;</code> and <code>&lt;/tfoot&gt;</code>.
  But  this time the row  has only one cell so you'll need to use the colspan
  attribute like this</p>
<p><code>&lt;td colspan=&quot;2&quot;&gt;</code></p>
<p>so that the cell will span across the two cells just above it.  </p>
<p>The text inside of the cell is</p>
<p>Source: Soil pH </p>
<p>and the link to Soil pH is <code>http://en.wikipedia.org/wiki/Soil_ph</code> (copy
  and paste the url please!!). </p>
<p>So, the link goes inside of the cell, the cell inside of the row and the row
  goes inside of the tfoot element. Just make sure all of your open tags are
  closed as always.</p>
<p>Might want to validate your page before you do the next table.</p>
<hr>
<p>Our last table is a calendar which starts just after:</p>
<p><code>&lt;h2&gt;</code>Previous Articles<code>&lt;/h2&gt;</code></p>
<p>The first two rows are inside of the thead section.</p>
<p>The first row  which has only one cell (and holds the word &quot;August&quot;)
  has to span 7 cells (columns) and it's done with:</p>
<p><code>&lt;th colspan=&quot;7&quot;&gt;</code></p>
<p>I hope I don't need to remind you that every row has to start and end with <code> &lt;tr&gt;</code> and <code>&lt;/tr&gt;</code> and
  the cell in this case must end with <code>&lt;/th&gt;</code>.</p>
<p>The second row has seven cells, one for each day of the week. Again, I am
  using the th container as these cells are the heads for each column.</p>
<p>Once you get to the third row use the td container for  all the dates.
  Let me show you the third row because it might be tricky.</p>
<p><code>&lt;tbody&gt;<br>  &lt;tr&gt;<br>
  &lt;td colspan=&quot;3&quot;&gt;&lt;/td&gt;<br>
  &lt;td&gt;</code>1<code>&lt;/td&gt;<br>
  &lt;td&gt;</code>2<code>&lt;/td&gt;  <br>
  &lt;td&gt;&lt;a href=&quot;#&quot;&gt;</code>3<code>&lt;/a&gt;&lt;/td&gt;<br>
  &lt;td&gt;4&lt;/td&gt;<br>
&lt;/tr&gt;</code></p>
<p>I used <code>&lt;tbody&gt;</code> to start the rows containing the dates and,
  of course, I have to finish the last with a closing <code>&lt;/tbody&gt;</code> which
  will come after the final <code>&lt;/tr&gt;</code>.</p>
<p>When spanning columns always make sure to use a value that, when added to the
  cells that have data in them, will equal the largest numbers of cells in any
  row. In this table we have seven cells and, in the above example, the first three
  cells are spanned and the remaining four cells have data in each cell. That's
  a total of seven.</p> 
<p>Think back to our first row when we used <code> colspan=&quot;7&quot;</code> to span all seven columns
  in every row.</p>
<p>The next three rows are smooth sailing. Each row has seven columns (cells)
  and each cell holds   one date.</p>
<p>But watch out for that last row. When you get to &quot;31&quot; you are going
  to need the columns attribute so that you will have a total of seven columns.
  That's all I'm going to tell you. </p>
<p>Just a reminder. Make sure to end this section with <code>&lt;/tbody&gt;</code> and
  then finish the table with <code>&lt;/table&gt;</code>.</p>
<p>Oh yes, some of the cells are faux links (links to non-existent) pages which
  I did just for practice. Feel free to include these links in your calendar
  as you see fit. For
  example, if you want to make Day 3 a link, here is the code that goes inside
  the td container:</p>
<p><code>&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;</code> or <code>&lt;a href=&quot;&quot;&gt;</code>3<code>&lt;/a&gt;</code> is
  valid too.</p>
<p>And that's it. Your two tables for the blog page are set. Have you been validating
  all along? If not, make sure this page and index are in good shape (error free)
  before going on.</p>

</section>


</div>  <!-- ned clearfix -->

<?php include("includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

