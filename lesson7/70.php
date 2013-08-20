<!DOCTYPE html>

<html>


<head>

<title>Lesson 7: Forms</title>

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
<li><a href="10.html">Lesson 7: Forms</a> </li>
</ul>


 <h1>Accessibility Issues</h1>
<p>Imagine trying to fill out a form on a web page if you can't see it.</p>
<p>If you are blind or have some other type of disability, filling out an online
   form could prove to be problematic or impossible even with screen reading
  technology. Site owners normally don't want to turn away users and customers,
  but they can unwittingly do so, if they don't handle their forms with care.</p>
 <p>I haven't introduced other elements that help make forms more accessible,
   such as <code>&lt;fieldset&gt;</code>, <code>&lt;legend&gt;</code> and <code>&lt;optgroup&gt;</code>.  Those
   elements group other elements
   to improve the structure of your  forms. I'll take these up in Lesson 9
   - Grouping Elements.</p>
 <p><code>&lt;label&gt;</code> is a great element  which promotes usability
   and makes things easier for those who can't see and rely upon screen readres.
   What's more, it removes the old practice of using a <code>&lt;p&gt;</code> tag just
   before the <code>&lt;input
   /&gt;</code>. As always, when there is a specific tag for a specific job
   use that rather than something general like <code>&lt;p&gt;</code>.</p>
 <p>If you're interested in learning more about accessible forms and accessible
   web design in general (something near and dear to me which I find provides
   the path to superior web design), see Jim Thatcher's Page on <a href="http://jimthatcher.com/webcourse8.htm">Accessible
   Forms</a>. He's THE guy when it comes to a growing industry.</p>
 <p>Accessibility is a web design standard.</p>
 


<a id="next" href="../lab7.html">You Are Now Ready For Your Next Lab - First Forms</a>


</section>



<?php include("../includes/sidebar.php");
print_sidebar(7,7);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>



