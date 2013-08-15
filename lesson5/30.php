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

<h1>Link To A Target On A Different Page</h1>

        
<p>Without designating a specific spot (target) on another page, the browser
  

          always loads the page from the top. That's the default which I demonstrated
  

          with the links between the 20.html and 10.html files. </p>
<p>But how can we designate a specific target on another page where we want to direct our visitor's attention? That might be much more useful than merely having the page load from the top down.</p>
<p>In this next example I  take you directly to &quot;Lesson 5 Links&quot; on
  the first page of this lesson. By doing this I will be bypassing  all the
  heading content of the page and have the user focus on a specific spot on that
  page.</p>
<p> There are two pages which need a little coding. Firs,the markup used on
this page:</p>

<p class="exs">Example of a Link To A Target on a Different Page</p>

<p class="views2">Code View</p>



        


          
<p><code>&lt;a href="10.html#lead"&gt;</code>See Lesson 5: Links<code>&lt;/a&gt;</code></p>





<p class="views2">Browser View</p>

<a href="10.html#lead">See Lesson 5: Links</a>


<p>That takes care of part one, but there's a second file we have to work on,
  10.html. We need to target the words &quot;Lesson 5: Links on the landing page.</p>
<p> Markup Used In The 10.html File:</p>



        
<p class="views2">Code View</p>



        

          
<p><code>&lt;H1 id=&quot;lead&quot;&gt;</code>Lesson 5: Links<code>&lt;/h1&gt;</code></p>





<p class="views2">Browser View</p>


<h1 id="top">Lesson 5: Links</h1>




<ol>
		  
		  <li>
There is no Browser View to show you because you don't see the target
as
you would see a link. You just see the result which is taking the user to the target spot on the page.</li>

<li>

The <code>id=&quot;lead&quot; </code> coding is invisible to the user. But when we select the

                  link "Lesson 5: Links,<code></code>" we will be taken

                  to the exact location - a target - in the 10.html file.
</li>

                <li>
Notice the attribute id's value "lead" is also part of the href 

                  value in <code>"href=10.html#lead"</code> 

                  in the 10.html file.
</li>       
			   
			    <li>
The value "lead" is arbitrary, but I always try to pick a word

                  that has relevance to the target. In this case &quot;lead&quot; was used
because it's the  lead heading of the landing page.</li>

			    
<li>Do not forget to use the <code>#</code> sign has I have used here (in the link that the user clicks). If you leave that out it won't work.</li>


</ol>
                  

<a id="next" href="40.html">You Know The Drill</a>


</section>




<?php include("../includes/sidebar.php");
print_sidebar(5,3);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>






