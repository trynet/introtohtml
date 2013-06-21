<!DOCTYPE html>

<html>


<head>

<title>Lesson 4: Validation</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 4: Validation</a></li>
</ul>

<h1>W3C Validation</h1>  



<p>The Mother Of All Validation Services resides at <a href="http://validator.w3.org/">http://validator.w3.org/</a>.
  Go ahead and poke around. Try it if you'd like, but we'll give it a good run
  in with this lesson's Lab.</p>
<p>While there are other HTML Validation services out there I like the W3C's
  because, after all, those are the smart boys and girls that develop the HTML
  specs.</p>
<h2>The Simple Rules That Rock HTML</h2>
<p>Have you   noticed that there are just a few rules to learn in this class?
  What follows is really everything you need to know about HTML's rules. Here
  is everything I know about HTML all boiled down to a few rules.
<h3>1. All Pages Must Have The Required Elements</h3>
<p>In case you've nodded off, go back and see <a href="30.html">File Requirements</a>.
<h3>2. For Every Open Tag There Must Be A Close Tag</h3>
<p>This is the hallmark of HTML and so many other internet technologies being
  developed by the W3C. It was what makes HTML predictable and symmetrical. There
  is no guess work involved. It's always &lt;element&gt;&lt;/element&gt;.
<h3>3. Elements Are Closed In The Reverse Order In Which They Are Opened Within
  A Block</h3>
<p>Here's an example.
<p><code>&lt;p&gt;</code>I start a simple paragraph and then all of the sudden <code>&lt;strong&gt;&lt;em&gt;</code>some
  words are so important<code>&lt;/em&gt;&lt;/strong&gt;</code> that I do something
  to make them stand out.<code>&lt;/p&gt;</code>
<p>In this case notice that the closing &lt;/em&gt; and &lt;/strong&gt; tags are in
  the reverse order of their matching open tags. Both of these tags in side
  of the a block, namely the p element.
<h3>4 . Some Elements Are Known As Empty Elements</h3>
<p>Don't be fooled by tags that have no open or close tag. Some tags do something
  just at the spot you put them in your code. Here are a few examples.</p>
<ul>
  <li><code>&lt;br /&gt;</code></li>
  <li><code>&lt;hr /&gt;</code></li>
  <li><code>&lt;img /&gt;</code></li>
</ul>
<p>When you see something like:</p>
<p><code>&lt;element /&gt;</code> or <code>&lt;element/&gt;</code></p>
<p> you know you're dealing with an empty tag.</p>
<h3>5. Character Entities Are Used For Non-Characters</h3>

<p>If you're not using an alpha-numeric character then you need to use a Character
  Entity. There are thousands of instances where this can come up as I pointed
  out when I discussed <a  href="../lesson2/80.html">Character Entities</a> in Lesson 2.</p>
  
<p>You'll know a Character Entity when you see one because the pattern is always
  &amp;code;.</p>
  
<a href="50.html" id="next">Other Validation Tools</a>


</section>


<?php include("../includes/sidebar.php");
print_sidebar(4,4);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>


