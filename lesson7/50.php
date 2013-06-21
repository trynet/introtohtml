<!DOCTYPE html>

<html>


<head>

<title>Lesson 7: Forms</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">


<ul id="breadcrumbs">
<li><a href="10.html">Lesson 7: Forms</a> </li>
</ul>


 <h1>Select Menus</h1>
 
<p>The Select Menu (a/k/a Drop Down Menu) is formed using the <code>&lt;select&gt;</code> <code>&lt;/select&gt;</code> container.</p>
<p>To create the choices in a Select Menu use <code>&lt;option&gt;</code> <code>&lt;/option&gt;</code> inside
   the <code>&lt;select&gt;</code> <code>&lt;/select&gt;</code> container. The
   Value Attribute is the information which is sent to the server.</p>
   
    <p class="exs">Example of a Select Menu</p>


<p class="views2">Code View</p>
<p><code>&lt;label&gt;</code>What month were you born in?</p>

       <p><code>&lt;select name="month"&gt;</code><br />
         <code>&lt;option&gt;</code>Choose A Month<code>&lt;/option&gt;</code> <br />
         <code>&lt;option value="jan"&gt;</code>January<code>&lt;/option&gt;</code><code><br />
           &lt;option value="feb"&gt;</code>February<code>&lt;/option&gt;</code> <code><br />
             &lt;option value="mar"&gt;</code>March<code>&lt;/option&gt;</code> <code><br />
               &lt;option value="apr"&gt;</code>April<code>&lt;/option&gt;</code> <code><br />
                 &lt;option value="may"&gt;</code>May<code>&lt;/option&gt;</code><code><br />
                   &lt;option value="jun"&gt;</code>June<code>&lt;/option&gt;</code><code><br />
                     &lt;option value="jul"&gt;</code>July<code>&lt;/option&gt;</code> <code><br />
                       &lt;option value="aug"&gt;</code>August<code>&lt;/option&gt;</code> <code><br />
                         &lt;option value="sep"&gt;</code>September<code>&lt;/option&gt;</code> <code><br />
                           &lt;option value="oct"&gt;</code>October<code>&lt;/option&gt;</code> <code><br />
                             &lt;option value="nov"&gt;</code>November<code>&lt;/option&gt;</code> <code><br />
                               &lt;option value="dec"&gt;</code>December<code>&lt;/option&gt;</code> <br>
       <code>&lt;/select&gt; </code><code>&lt;/label&gt;</code></p>


<p class="views2">Browser View</p>

<label>What month were you born in?
  <select name="month">
         <option>Choose A Month</option>
         <option value="jan">January</option>
         <option value="feb">February</option>
         <option value="mar">March</option>
         <option value="apr">April</option>
         <option value="may">May</option>
         <option value="jun">June</option>
         <option value="jul">July</option>
         <option value="aug">August</option>
         <option value="sep">September</option>
         <option value="oct">October</option>
         <option value="nov">November</option>
         <option value="dec">December</option>
       </select></label>
     
     
     <p id="select">Here are some commonly used <code>&lt;select&gt;</code> attributes.</p>
     
<table>
         <caption>
           Select Attributes
         </caption>
         
                         <colgroup>
<col id="left" />
<col id="center" />
<col id="right" />
</colgroup>


<thead>

         <tr  class="grayhead">
           <th>ATTRIBUTE</th>
           <th>VALUE</th>
           <th> PURPOSE / EXAMPLE
           </th>
         </tr>
         
         </thead>
         
        <tbody>
        
<tr>
           <td><code>name</code></td>
           <td>Expressed as short text description.</td>
           <td><p>Provides a name for the Select object and is used for data
               handling.</p>
             <p><code>name="month"</code></p></td>
         </tr>
         
<tr>         
           <td><code>multiple</code></td>
           <td>             <p><code>multiple=&quot;multiple&quot;</code></p></td>
           <td><p>Allows user the ability to select more than one option by using
               CTRL + CLICK at the same time. Make sure to tell the user of this
               function if you would like multiple answers.</p>
               
               </td>

         </tr>
         
         </tbody>
         
       </table>

       <a id="next" href="60.html">Next</a>



</section>


<?php include("../includes/sidebar.php");
print_sidebar(7,5);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>
