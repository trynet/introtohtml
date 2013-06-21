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

<h1>Link To Another Page</h1>

        
<p>Links are made with the Anchor (<code>&lt;a&gt;</code> <code>&lt;/a&gt;</code>) 

          container. The Anchor tag has several attributes, but the one known 

          around the world is href.</p>
<p>For this demonstration I want you to see how to make a link to another page
  in our class, namely the first page for Lesson 5 - Links (the page you probably
just came from).</p>

<p class="exs">Example of a Link To Another Page</p>


<p class="views2">Code View</p>



        


          
<p><code>&lt;a href="10.html"&gt;</code>Lesson 5: Links<code>&lt;/a&gt;</code></p>




<p class="views2">Browser View</p>

<p><a href="10.html">Lesson 5: Links</a></p>
<p>The above link takes you to a landing page. </p>
<ol>

  <li>
    The value for the href attribute is the name of the file you 
                  
    want the user to see after a link is clicked. Here it's 10.html.
</li>
  <li>The name of the file and value of the href must be identical. If you are
    referring to a file called &quot;aboutus.html&quot; but the file name is
    &quot;about_us.html&quot; the link will not work.</li>



  <li>
To keep things simple, both files - 20.html (that would be this page's file name)
  and 10.html - are in the same

                  directory (folder). You can keep your .html files in different
  folders,

                  but that's for another day.

</li>



  <li>You must always close a link with <code>&lt;/a&gt;</code>. Failure

            to do so will result in highly undesirable consequences. (Someone

  could get hurt).</li>
</ol>
<p>The value of the href attribute is called the path statement. It's the pointer
  or reference to the file you want users to see.  Understanding how path statements
  work is a real big deal i web development so go see <a href="../appendix/D.html">Appendix
  D - Files And Folders - What's In A Name</a>?</p>
<h2>A Few Rules About File Naming Conventions</h2>
<p>Stick with these simple rules when naming .html files:</p>
<ul>
  <li>Keep everything in lower case.</li>
  <li>Never have  any spaces in the file name - use aboutus.html, about-us.html,
    about_us.html but never about us.html.</li>
  <li>The file name for a home page for all web sites (or sections of sites)
    is always index.html and <em><strong>never</strong></em> anything like homepage.html
     or startpage.html.</li>
  <li>Give your files  descriptive names so you will know what is in the
    file without having to open it. I broke this rule here because 20.html is not
    very descriptive, but had this been a file open to everyone I would have given
    it a more descriptive name (plus it's a good SEO practice).</li>
</ul>


<a id="next" href="30.html">Page 3, Up Ahead</a>



</section>




<?php include("../includes/sidebar.php");
print_sidebar(5,2);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>



