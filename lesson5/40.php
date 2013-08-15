<!DOCTYPE html>

<html>


<head>

<title>Lesson 5: Links</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />

</head>

<body>


<div id="wrapper">

<?php include("../includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<ul id="breadcrumbs">
<li><a href="10.html">Lesson 5: Links</a></li>
</ul>
<h1>Link To A Target On The Same Page</h1>





<p>Pointing to a target on the same page is a lot like what you just read but
it's simpler. This time only one file is involved.</p>
<p>You've seen this technique use in something like the time honored Frequently Asked Questions page that I once did for my Joy Of Code site. A question is asked at the top of the page and answered some where below. Of course, it doesn't have to be a Q and A page to make the target work.</p>
<p>Here's one of the questions from my now retired FAQ page:</p>

<p class="exs">Example of a Link To A Target on a Different Page</p>


<p class="views2">Code View</p>

       

          
<p><code>&lt;a href="#print"&gt;</code>Can I print course material<code>&lt;/a&gt;</code>?</p>





<p class="views2">Browser View</p>



<p><a href="#print">Can I print course material</a>?</p>
		




        
<p>The target markup - the answer to the question - goes like this:</p>



<p class="views2">Code View</p>



        


          
<p><code>&lt;p id=&quot;print&quot;&gt;&lt;strong&gt;</code>Can I print
course material?<code>&lt;/strong&gt;&lt;/p&gt;</code></p>
<p><code>&lt;p&gt;</code>You have permission to print the material if you find that a hard
  copy is easier or more convenient for you to review. But my class is licensed
  to you and you alone, and no other copies, in any format or media, are allowed.<code>&lt;/p&gt;</code></p>
<p><code>&lt;p&gt;</code>More about that in the Terms Of Service to which you must agreed
  and abide by in order to take this class.<code>&lt;/p&gt;</code></p>
<p class="views2">Browser View</p>



<p id="print"><strong>Can I print course material?</strong></p>

<p>You have permission to print the material if you find that a hard copy is easier or more convenient for you to review. But my class is licensed to you and you alone, and no other copies, in any format or media, are allowed.</p>

<p>More about that in the Terms Of Service to which you must agree and abide by in order to take this class.</p>

<hr/>


<p>Again, there is nothing noticeable in the page - the target container <code>id="print&quot;&gt;</code> is invisible to the
          browser view. </p>



        
<p>Notice that in the case of linking to a target on the same page, we 

          do not markup the link with the filename such as <code>&lt;a href="<em>faq.html</em>#print"&gt;</code>.
          There's a good reason for this. Do you know why?</p>

                          
<a id="next" href="50.html">Keep Going</a>


</section>




<?php include("../includes/sidebar.php");
print_sidebar(5,4);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>







        




