<!DOCTYPE html>

<html>


<head>

<title>Lesson 5: Links</title>

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
<li><a href="10.html">Lesson 5: Links</a></li>
</ul>


<h1>Email Link</h1>



<p class="exs">There's a good way and a bad way to write an emaillink. Let's
  look at the good way.</p>

<p class="exs">Example of an Email Link</p>

<p class="views2">Code View</p>



        
<code>&lt;p&gt;</code>Send your best regards to <code>&lt;a

          href="mailto:bud@joyofcode.com"&gt;</code>bud@joyofcode.com<code>&lt;/a&gt;.&lt;/p&gt;</code>

          <p class="views2">Browser View</p>



<p>Send your best regards to <a href=

"mailto:bud@joyofcode.com">bud@joyofcode.com</a>.</p>


<ol>

                <li>It's mailto which creates the Email Link.

</li>

<li>Do not assume that an email program automatically opens when an

Email Link is clicked.

                  <p>More often than not, it won't. That's why the preference is 

                  to use the email address itself as the link, rather than something 

                  like this: Write to <a href="mailto:bud@joyofcode.com">Bud Kraus</a>. 

                  In this case, if the email program does not open, the web visitor 

                  will not know where to send an email. </p>

                  <p>Users of web based email - gmail, hotmail and the like -
                    will 

                  also not be able to email you. </p>

                  <p>The safest way to go is to show the email address. Then
                    a user 

                  can copy and paste it  into an email program's TO:
                  

                  line, just in case an email program does not open when the
                  email 

  address link is selected.</p></li>

</ol>


<a id="next" href="70.html">One More</a>


</section>




<?php include("../includes/sidebar.php");
print_sidebar(5,6);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>




