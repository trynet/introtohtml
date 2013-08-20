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

 <h1>Rows And Columns</h1>
 
 <p>To start a Table, use the <code>&lt;table&gt;</code> <code>&lt;/table&gt;</code> container.
   Inside that container, use <code>&lt;tr&gt;</code> <code>&lt;/tr&gt;</code> to
   form a row and <code>&lt;td&gt;</code> <code>&lt;/td&gt;</code> pairs
   to form the columns (cells).</p>
 <p><span class="exs">Example of a Simple Table</span></p>
   
   <p class="views2">Code View</p>
   
   <p><span class="indent"><code>&lt;table&gt;</code><br />
       <code>&lt;tr&gt;<br />
&lt;td&gt;</code>One<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Two<code>&lt;/td&gt;<br />
&lt;/tr&gt;</code><br />
<code>&lt;tr&gt;<br />
&lt;td&gt;</code>Three<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Four<code>&lt;/td&gt;<br />
&lt;/tr&gt;</code><br />
<code>&lt;/table&gt;</code></span></p>
   
   
      <p class="views2">Browser View</p>
      
      
<table class="lesson8">

<tr>

<td>One</td>

<td>Two</td>

</tr>



<tr>

<td>Three</td>

<td>Four</td>

</tr>

</table>

              <ol>

                                        <li>
                                             <p>The rows are created with tr (Table Row) and the cells in each

row are made with td (Table Data).</p>
                                        </li>



                                        <li>
                                             <p><strong>ALWAYS</strong> end your
                                               Table with

<code>&lt;/table&gt;</code>. Failure to do so will cause a big

mess that validation is sure to point out.</p>
                                        </li>
                                        
                                                                                <li>
                                                                                  <p>
                                                                            
                                         
                                                                            
                                                                                     I recommend that you format
                                                                            
                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                                     your markup  
                                                                            
                                                                            
                                                                                     so that it is easy to
                                                                                     
                                                                            
                                                                            
                                                                            
                                                                                     read. Do not do it this
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                                     way
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                                      because it is difficult
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                                      to read, causing
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                                       you to make unnecessary
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                                       errors:</p>
                                                                                       
                                                                                  <p><code>&lt;table&gt;<br>
                                                                                  &lt;tr&gt;&lt;td&gt;</code>One<code>&lt;/td&gt;&lt;td&gt;</code>Two<code>&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;</code>Three<code>&lt;/td&gt;&lt;td&gt;</code>Four<code>&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;</code> </p>
                                        </li>
                                        
                                        
                                        
                                        <li>Everything to do with how the table
                                          looks - as you probably know by
                                          now - is set with CSS. The space inside
                                          the cells, the background of rows,
                                          the use of borders and the width of
                                          the table are, like all matters of
                                          style, handled by CSS.</li>

            </ol>
            
            <h2>Now Let's Get A Tad More Complicated</h2>
            
      <p>Your tables can have as many rows and columns (those td elements) as
        you want. </p>
      <p><span class="exs">An Example Of A 3 X 3 Table</span></p>


   <p class="views2">Code View</p>
   <p><code>&lt;table&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;</code>One<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Two<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Three<code>&lt;/td&gt;<br />
</code> <code>&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;</code>Four<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Five<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Six<code>&lt;/td&gt;<br />
</code> <code>&lt;/tr&gt;</code><code><br />
</code> <code>&lt;tr&gt;<br />
&lt;td&gt;</code>Seven<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Eight<code>&lt;/td&gt;<br />
&lt;td&gt;</code>Nine<code>&lt;/td&gt;</code><code><br />
&lt;/tr&gt;</code><code><br />
&lt;/table&gt;</code></p>
   
   
   
   
  <p class="views2">Browser  View</p>
      
<table  class="lesson8">
        <tr>
          <td>One</td>
          <td>Two</td>
          <td>Three</td>
        </tr>
        <tr>
          <td>Four</td>
          <td>Five</td>
          <td>Six</td>
        </tr>
        <tr>
          <td>Seven</td>
          <td>Eight</td>
          <td>Nine</td>
        </tr>
      </table>


<p>Here's a pretty good place to step out and give a table a try.</p>

          <p><a href="../code_tester.html" id="code_tester_icon">Code Tester</a></p>


<a id="next" href="30.html">Learn More Now</a>


</section>



<?php include("../includes/sidebar.php");
print_sidebar(8,2);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>




