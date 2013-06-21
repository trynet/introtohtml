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

<h1> External Page Link</h1>



        <p>To link outside the current domain, that is, to a page at another site, 

          use the following markup.</p>
          
          <p class="exs">Example of a Link To Another Web Site</p>
          
          
<p class="views2">Code View</p>


<code>&lt;p&gt;</code>It just so happens that the

          <code>&lt;a href="http://www.w3c.org"&gt;</code>World Wide Web Consortium<code>&lt;/a&gt;</code>is

          the industry organization which develops Internet standards and technologies

          and a site you have already seen using their Markup Validation Service.<code>&lt;/p&gt;</code>
          <p class="views2">Browser View</p>



        
<p>It just so happens that the <a href="http://www.w3c.org">World Wide Web Consortium</a> is
  the industry organization which develops Internet standards and technologies
and a site you have already seen using their Markup Validation Service.<code></code></p>


<ol>

                <li>Call it a Web Address, URL, URI or Path Statement - it's all

                  the same. In this case it's http://www.w3c.org,

                  the Home Page of the W3C.

</li>



                <li>The  filename of the Home Page is index.html. You don't

                  see the filename in the address locator of your browser because

                  it is invisible. (In other words the URL is really http://www.w3c.org/index.html).

                  <p> Get in the habit of naming the Home Page for your site "index.html." 

                  (You already are, if you've been following my directions in 

  the labs).</p></li>

</ol>


<a id="next" href="60.html">Next Page Please</a>



</section>



<?php include("../includes/sidebar.php");
print_sidebar(5,5);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>






