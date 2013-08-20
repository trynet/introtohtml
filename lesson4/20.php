<!DOCTYPE html>

<html>


<head>

<title>Lesson 4: Validation</title>

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
<li><a href="10.html">Lesson 4: Validation</a></li>
</ul>

<h1>Why Validate?</h1>     



   <p>For some, the process of validation gets in the way as they create           web content. That's a fairly dangerous attitude.</p>        <p>Learn
     from the start that you need to integrate validation into your workflow
      process. Once that becomes part of the way you do things, you'll thank
     me for it. As I like to say, &quot;Validate early and often.&quot;</p>        <p>Here are two real good reasons why you need to validate HTML. (There are actually a few, more indirect, reasons to  error check your code).</p>
     <h2>One: Valid HTML Is The First Step To Getting CSS To Work As It Should</h2>
        <p>Building web sites is just like building a house. If your structure
          is no good - for example, if the interior walls are not plumb - when
          you go to apply the wallpaper, you'll have a mess. The wallpaper is
          CSS. Just like the real world, CSS is attached to the structure. If
          you go on to learn CSS - and I sure hope you will - then you will see
          how this is so.</p>
      <h2>Two: It's A Learning Tool</h2>        <p>Just when I thought I knew HTML
          back in 1997, I met up with validation. That's when I realized that
          I was a work in progress. Long after Intro To HTML is over, you'll
          be using (I hope) validation to check that your page adheres to spec.
          Where it doesn't you'll be shown, politely, the error of your ways,
          so that you can make corrections to your file.</p>
        <hr>
        <h2>What The
            Validator Will Not Check</h2>
          <p>The validator will make a quantitative  assessment of your HTML.
            It will check if all open tags are closed in the right order, and
      it will let you know if they aren't. </p>
          <p>What it does not do is let you know if you've made a well formed
            document, that is, did  you use the elements to give real meaning
            to your content. You could make a page using only paragraphs and
            that would be a perfectly valid page as the validator would see it. But
            leaving out headings, lists and other elements would not serve the
            purpose of using the elements to give meaning to your content.</p>
            
            
<a id="next" href="30.html">Next Page</a>



</section>



<?php include("../includes/sidebar.php");
print_sidebar(4,2);
?>


</div>  <!-- ned clearfix -->

<?php include("../includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>



