<!DOCTYPE html>

<html>


<head>

<title>Lesson 6: Images And Videos</title>

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
<li><a href="10.html">Lesson 6: Images And Videos</a></li>
</ul>


<h1>Embedding Videos</h1>
<p>Copy and pasting the html code from a YouTube video - or a video from a 
  similar service - is about the easiest thing you can imagine.</p>
<p>But rather than tell you about it, let me show you how it's done with this
  video. </p>
<p>Here is the code I got from YouTube so I could embed this video into this
  page.</p>
  
          <p class="exs">Example Of An Embedded Video</p>
          
          
<p class="views2">Code View</p>

<p><code>&lt;object width=&quot;640&quot; height=&quot;360&quot;&gt;&lt;param name=&quot;movie&quot; value=&quot;http://www.youtube.com/v/uX7wgVWpUGw?version=3&amp;amp;hl=en_US&quot;&gt;&lt;/param&gt;&lt;param
  name=&quot;allowFullScreen&quot; value=&quot;true&quot;&gt;&lt;/param&gt;&lt;param
  name=&quot;allowscriptaccess&quot; value=&quot;always&quot;&gt;&lt;/param&gt;&lt;embed
  src=&quot;http://www.youtube.com/v/uX7wgVWpUGw?version=3&amp;amp;hl=en_US&quot; type=&quot;application/x-shockwave-flash&quot; width=&quot;640&quot; height=&quot;360&quot; allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot;&gt;&lt;/embed&gt;&lt;/object&gt;</code></p>
<p class="views2">Browser View</p>



<object width="640" height="360"><param name="movie" value="http://www.youtube.com/v/uX7wgVWpUGw?version=3&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/uX7wgVWpUGw?version=3&amp;hl=en_US" type="application/x-shockwave-flash" width="640" height="360" allowscriptaccess="always" allowfullscreen="true"></embed></object>

<a href="../lab6.html" id="next">You Are Now Ready For Your Next Lab - First Embeds</a>



</section>


<?php include("../includes/sidebar.php");
print_sidebar(6,7);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>




