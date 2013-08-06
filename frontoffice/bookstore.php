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


<h1>Bookstore</h1>


<img src="../images/bookstore_banner_small.gif" alt="Illustration of Books on a Shelf" id="bookstore" />

<p>Here are just a few of my favorites. Some of these are industry classics!!</p>
<p>Or just search Amazon for some book to curl up with on a cold winter night.
<form method="get" action="http://www.amazon.com/exec/obidos/external-search">
          <input type="hidden" name="tag" value="trynet" />
          <input type="text" name="keyword" size="20" value="" class="search"/>
          <input  type="image" src="../images/searchby.gif" name="name"  alt="Go Search" class="go" />
</form>
</p>


<div class="book_section clearfix">
<h2>HTML5 & CSS3 Visual QuickStart Guide</h2>
                  

<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=FFFFFF&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=trynet&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=0321719611" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
            
 <div class="book_description">
    <p>    Elizabeth Castro's industry standard is a solid buy. A great 
                  HOW TO reference. I use it all the time. It helped create my
       classes. THE must have book!!</p>

        </div>
     
</div>



<div class="book_section clearfix">
<h2>Learning Web Design: A Beginner's Guide to (X)HTML, StyleSheets, and Web Graphics</h2>
                  

<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=FFFFFF&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=trynet&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=0596527527" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>

                  
 <div class="book_description">


  <p> Does any of this sound familiar?</p>

 <p>“I’ve been a print designer for 17 years, and now all my clients want web sites.”</p>

 <p>   “I work as a secretary in a small office. My boss has asked me to put together a small internal web site to share company information among employees.”</p>

 <p>   “I’ve been a programmer for years, but I want to try my hand at more visual design. I feel like the Web is a good opportunity to explore new skills.”</p>

 <p>   “I am an artist and I want to know how to get samples of my paintings and sculpture online.”</p>

  <p> “I’m a designer who has watched all my colleagues switch to web design in the last few years. I’m curious about it, but I feel like I may be too late.”</p>

<p>Then this is your book!!</p>


        </div>

</div>


<div class="book_section">
<h2>CSS  Mastery</h2>
<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&#038;bc1=FFFFFF&#038;IS2=1&#038;bg1=FFFFFF&#038;fc1=000000&#038;lc1=0000FF&#038;t=trynet&#038;o=1&#038;p=8&#038;l=as4&#038;m=amazon&#038;f=ifr&#038;ref=ss_til&#038;asins=1430223979" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>

<div class="book_description">
<p>This book is at the top of the list for good reason. It never leaves my desk. But you need to learn HTML first before you master CSS.</p>
<p>The first two chapters are great reviews of CSS. After that it&#8217;s on to styling lists, links, forms, data tables and of course CSS layout. A few good case studies too.</p>
<p><strong>If you&#8217;re going to buy just one CSS book get this one!!</strong></p>
</p>

</div>

</div>

<div class="book_section">
<h2>Cascading Style Sheets: Designing for the   Web</h2>
<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&#038;bc1=FFFFFF&#038;IS2=1&#038;bg1=FFFFFF&#038;fc1=000000&#038;lc1=0000FF&#038;t=trynet&#038;o=1&#038;p=8&#038;l=as4&#038;m=amazon&#038;f=ifr&#038;ref=ss_til&#038;asins=0321193121" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
<div class="book_description">
<p>If you really want to learn Cascading Style Sheets, go to the masters &#8211;
                Hakon Wium Lie and Bert Bos. Why? Who better to know about CSS
                than the guys who developed the specs?</p>
<p>I could not have made this web site &#8211; or any project I&#8217;ve ever worked<br />
                  on &#8211; without this book!! </p>
</p></div>

</div>



</section>

      <!--#include virtual="../../../cgi-bin/incl_frontoffice_sidebar.pl" -->

<?php
include("side_bar.php");
?>

</div>  <!-- ned clearfix -->

   


<?php
include("../includes/footer.php");
?>



</div> <!-- end wrapper -->

</body>

</html>



