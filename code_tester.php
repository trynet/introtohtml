<!DOCTYPE html>


<html>


<head>



<title>Code Tester</title>


<link rel="stylesheet" href="styles/styles.css" />


</head>

<body>

<div id="wrapper">

<header>

<img src="/images/header.png"  alt="Joy Of Code Intro To HTML" />


<nav>
<ul class="nav nav-pills">

 <li><a href="/index.html"><i class="icon-home"></i>Home Room</a></li>
<li><a href="/frontoffice"><i class="icon-info-sign"></i>Front Office</a></li>
<li class="active"><i class="icon-pencil"></i>Code Tester</li>
<li><a href="workspace.php"><i class="icon-cog"></i>Work Space</a></li
<li><a href="/logout.php"><i class="icon-off"></i>Sign Out</a></li>

</ul>
</nav> 

</header>



<div class="clearfix">

<section id="main">


<h1>Code Tester</h1>



<div id="how_to_try_box">


<p>Test Your Code In This Box - The Code Tester</p>

<form method="post"
action="http://www.joyofcode.com/cgi-bin/code_tester_ws2.cgi" target="view">

<textarea name="Html" cols="50" rows="10">
</textarea>
<br />
<input type="submit" value="Give It A Try"
name="submit" class="submit" />


<p>Here's What You Did</p>


<iframe scrolling="auto"     name="view" title="This box contains the results of the input of the textarea box."></iframe>

<br />

<input type="reset" value="Try Again?" class="submit"  />


</form>

</div>




</section>

</div>  <!-- ned clearfix -->

<?php include "includes/footer.php" ?>


</div> <!-- end wrapper -->

</body>

</html>

