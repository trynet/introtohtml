<!DOCTYPE html>

<html>

<head>

<title>Lesson 1: The Basics > Syntax</title>

<meta charset="utf-8" />


   <link rel="icon" href="../images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="../images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="../images/favicon.png" type="image/png"/>

   <link rel="stylesheet" href="../styles/styles.css" />


</head>

<body>

<div id="wrapper">

<?php include( "../includes/header.php" ); ?>

<div class="clearfix">

<section id="main">


<ul id="breadcrumbs">
<li><a href="10.html">Lesson 1: The Basics</a></li>
</ul>



     <h1>Syntax</h1>
     

        
     <p>Soon you will see a pattern emerging in our containerized world

and

          that pattern is the syntax used over and over again in HTML. This
       pattern is very predictable and takes the guesswork out of HTML. That's
       what I call very good news.</p>

        <p><strong>Tags</strong> are made up of <strong>elements</strong>

and

          <strong>attribute-value pairings</strong>.</p>

<p>The pattern goes like this:</p>

        <p><code>&lt;element attribute="value"&gt;</code>

<code>&lt;/element&gt;</code></p>
        <p>or using an empty tag as an example you could have</p>
        <p><code>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</code></p>

        <p>Using the empty tag as an example of attributes and their values (<code>img</code> is
          something we will first encounter in 
          Lesson 6 - Embedding Images And Videos) here is the markup:</p>

<p class="views2">Code View</p>



          <p><code>&lt;img src=&quot;../images/bud_hoeing.jpg&quot; alt=&quot;Photo
            Of Bud Hoeing In Garden&quot; /&gt;</code></p>



        <p class="views2">Browser View</p>
        
<img src="../images/bud_hoeing.jpg" alt="Photo Of Bud Hoeing In Garden" />


<h2>A Few Rules To Keep In Mind</h2>
<ol>

  <li>In the above example, <code>&lt;img /&gt;</code> is the element and <code>src</code> and  <code>alt</code> are 
    

                  attributes. Every attribute must have a value and that value

                  must be in quotations such as <code>&quot;images/bud_hoeing.jpg&quot;</code>. Think of
                  a

                  value as something which defines an attribute.

  </li>

  <li> You can have more than one attribute-value pairing for

a

                  given element  as I did in this example.</li>
  <li>Two or more attribute-value
                  pairings must be separated by at least one space.</li>
  <li>Finally, the order of the attributes is not important. I could have started
    with <code>alt</code> and then used <code>src</code>.</li>
              
</ol>
     <p>Wrap your mind around the syntax because that's what lies at the
heart of HTML. </p>

        <p>While we will cover the most widely used elements, attributes, and
values,  it's not possible to go over all of them. If you understand the
syntax,  then you'll be able to turn to other resources, like the W3C, to
get   the information you need to progress further. Fortunately there aren't
          nearly as many attributes as there once were.  For instance, all
          of the attributes below are about style, appearance, and presentation
          and have been replaced through the use of CSS.
<ul>
          <li><code>bgcolor</code></li>
          <li><code>width</code></li>
          <li><code>height</code></li>
          <li><code>border</code></li>
        </ul>
<h2>A Little Try</h2>
<p>Here's your first chance to take the Code Tester for a ride. When you see
  the Code Tester icon, it's my little prompt telling you to give something a
   try But you don't really need my prompt because the Code Tester is a
  link at the top and bottom of every page.</p>
<p>But don't think that's the way you make web pages. It's just a way to try
  something out.</p>
<p>See if you can code this simple sentence:</p>
      <p>Hi. I am here. </p>
        <p>Don't forget to use the &lt;p&gt;&lt;/p&gt; tags because all content
          must be marked up (i.e., put inside an html tag container).</p>

<p><a href="../code_tester.html" id="code_tester_icon">Code Tester</a></p>
            
            <a id="next" href="70.html">One More Page</a>


</section>

<?php 
include("../includes/sidebar.php"); 
print_sidebar(1,6);
?>

</div>  <!-- ned clearfix -->

<?php
include("../includes/footer.php");
?>

</div> <!-- end wrapper -->

</body>

</html>


