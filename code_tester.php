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
<li class="active"><i class="icon-pencil"></i><strong>Code Tester</strong></li>
<li><a href="workspace.php"><i class="icon-cog"></i>Work Space</a></li
><li><a href="/logout.php"><i class="icon-off"></i>Sign Out</a></li>

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
  <button type="submit" name="submit"  class="btn btn-warning">Give It A Try</button>

<p>Here's What You Did</p>

<iframe scrolling="auto"     name="view" title="This box contains the results of the input of the textarea box."></iframe>


<br />

  <button type="reset" id="tryAgain" name="reset"  class="btn">Try Again</button>


</form>



</div>




</section>

</div>  <!-- ned clearfix -->

<?php include "includes/footer.php" ?>


</div> <!-- end wrapper -->

</body>

</html>

