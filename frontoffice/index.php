<!DOCTYPE html>

<html>


<head>

<title>Front Office</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />


</head>

<body>

<div id="wrapper">


<?php
include("../includes/header.php");
?>


<div class="clearfix">

<section id="main">

<h1>Front Office: Announcements</h1>


<?php require( "../includes/announce.php" ); ?>


</section>



<?php
include("side_bar.php");
?>

</div>  <!-- ned clearfix -->

   

<?php require( "../includes/footer.php" ); ?>


</div> <!-- end wrapper -->

</body>

</html>



