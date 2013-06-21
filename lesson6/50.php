<!DOCTYPE html>

<html>


<head>

<title>Lesson 6: Images And Videos</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">


<ul id="breadcrumbs">
<li><a href="10.html">Lesson 6: Images And Videos</a></li>
</ul>
<h1>Clickable Images</h1>


        <p>To create a clickable image place the embedded

          image within the anchor container. </p>
          
                  <p class="exs">Example Of A Clickable image</p>
                  
                  
        <p class="views2">Code View</p>
        
        <p> <code>&lt;p&gt;</code>Go ahead. Click on it.<code> &lt;a
            href=&quot;index.html&quot;&gt;&lt;img
        src=&quot;images/home.gif&quot; alt=&quot;Home&quot; /&gt;&lt;/a&gt;&lt;/p&gt; </code></p>
        <p class="views2">Browser View</p>

        <p>Go ahead. Click on it. <a href="../index.html"><img src="../images/home.gif" alt="Home" /></a></p>


	   
<ul>
<li>Notice that the anchor element (<code>&lt;a&gt; &lt;/a&gt;</code>) is wrapped around the <code>&lt;img/ &gt;</code> tag.</li>
<li>Some browsers still render a blue border around clickable images. The border
  is removed with CSS.</li>
<li>Again, in the interest of full disclosure, the path statements seen above are
  not the actual path statements to the index.html and home.gif files.</li>

</ul>


<p>Img, like Anchor, is a great example of an inline element. </p>
<p>We don't see images used as buttons in navigation interfaces much anymore. It
  has been replaced with the practice of using list markup with anchors and CSS
  to make it good lookin'.</p>



<a id="next" href="60.html">Speaking Of Outdated Practices Keep Going</a>

</section>


<?php include("../includes/sidebar.php");
print_sidebar(6,5);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>





