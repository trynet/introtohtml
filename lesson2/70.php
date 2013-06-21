<!DOCTYPE html>

<html>


<head>

<title>Lesson 2: Fundamental Elements > Character Entities</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>

<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 2: Fundamental Elements</a></li>
</ul>
<h1>Character  Entities</h1>

   
            
<!--    

<p>Here are a few Character Entities you can insert in your markup as needed. These are a few of the important ones.</p>

 -->

<p>One other part of HTML deals with Character Entities.</p>


<p><strong>Character entities are used  for everything other than alpha-numeric
    characters.</strong></p>
<p>They aren't really tags, so no open and close tags are needed. You'll know a               Character Entity when you see one. It doesn't use the brackets (<code>&lt;               &gt;</code>), and it always begins with an ampersand (<code>&amp;</code>),               and ends with a semi-colon (<code>;</code>).</p>
<table>
    <caption>              A Very Few Character Entities          </caption>                                <colgroup> <col id="left" /> <col id="center" /> <col id="right" /> </colgroup>
    <thead>
        <tr class="grayhead">
            <th class="cellbottom">Character Entity</th>
            <th class="cellbottom">What It Looks Like</th>
            <th class="cellbottom">What It Does</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&amp;nbsp;</code></td>
            <td>&nbsp;</td>
            <td>No Break Space</td>
        </tr>
        <tr class="grayband">
            <td><code>&amp;amp;</code></td>
            <td>&amp;</td>
            <td>Ampersand<br />
            (Not always necessary)</td>
        </tr>
        <tr>
            <td><code>&amp;acute;</code></td>
            <td>&acute;</td>
            <td>Acute Accent</td>
        </tr>
        <tr>
            <td><code>&amp;pound;</code></td>
            <td>&pound;</td>
            <td>English Pound</td>
        </tr>
        <tr valign="top">
            <td><code>&amp;frac12;</code></td>
            <td>&frac12;</td>
            <td>Fraction</td>
        </tr>
        <tr class="grayband">
            <td><code>&amp;#169;</code></td>
            <td>&copy;</td>
            <td>Copyright</td>
        </tr>
    </tbody>
</table>

            
<p>I'm a little nutty when it comes to Character Entities because there             are thousands of them.  <a target="_blank" href="http://www.mountaindragon.com/html/iso.htm">Here             are just a few</a> to keep you busy.  Do not try to memorize them!!</p>
<a id="next"  href="80.html">One More</a>



</section>

<?php include("../includes/sidebar.php");
print_sidebar(2,7);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

