<!DOCTYPE html>


<html>


<head>



<title>Lab 4 - First Checking - Directions</title>



<meta charset="utf-8" />


   <link rel="icon" href="images/favicon.ico" type="image/ico"/>
   <link rel="icon" href="images/favicon.gif" type="image/gif"/>
   <link rel="icon" href="images/favicon.png" type="image/png"/>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
   <link rel="stylesheet" href="styles/styles.css" />




</head>

<body>

<div id="wrapper">

<?php include("includes/header.php"); ?>

<div class="clearfix">

<section id="main">

<h1 class="lab-header">Lab 4: First Checking</h1>
<p>This time around there is no code or content to add to your pages. Rather,
  I am going to show you how to error check your pages. This process is called
  validation</p>
  
  <div class="thumbnail">
    
<img src="images/peek.jpg" alt="Sneak A Peek " class="peek" />
  
<ul class="nav">
  <li><a href="labs/4/index.html" target="_blank"><i class="icon-file"></i>index.html</a></li>
  <li><a href="labs/4/prep.html" target="_blank"><i class="icon-file"></i>prep.html</a></li>
  <li><a href="labs/4/plant.html" target="_blank"><i class="icon-file"></i>plant.html</a></li>
  <li><a href="labs/4/harvest.html" target="_blank"><i class="icon-file"></i>harvest.html</a></li>
  <li><a href="labs/4/blog.html" target="_blank"><i class="icon-file"></i>blog.html</a></li>
</ul>

</div>

<h2>Watch My Video To See What You Will Be Doing</h2>
<p>Sit back, relax and enjoy the show while I show you how to find the coding
  errors in your pages and how to fix them. In this video, I used a file from
  an earlier version of this class, but it is still a good show.</p>

<object width="480" height="390"><param name="movie" value="http://www.youtube.com/v/--5jwQptFQI?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/--5jwQptFQI?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="480" height="390" allowscriptaccess="always" allowfullscreen="true"></embed></object>


<p>In case you can't play the video here's the step by step instructions on how
  to validate an .html file.</p>
<h2>Step 1: Choose your first file (index.html) to validate.</h2>
<p>Proceed to the <a href="http://validator.w3.org/#validate_by_upload+with_options" target="_blank">W3C
    Validation Service</a>. A new window will open automatically so it will be
    easier for you to use the Validator. This Validator page allows you to upload
    your .html files one at a time to check for errors. </p>
<p>On the Validator page, first hit the &quot;Browse&quot; button on the <strong>File</strong> line
  and find the index.html file from Lab 3 on your computer. That's the first
  file we're going to check.</p>
<p>Leave the settings on the <strong>Encoding</strong> line and the <strong>DOCTYPE</strong> line
  as is (by default, the W3C has these set to Automatic Detect). The validator
  will automatically detect your DOCTYPE and Character Encoding statements which
  you already have in your files.</p>
<p>After that, you'll find a series of check boxes under the <strong>Options
     </strong> category. Select &quot;Show Source&quot; so you will be able to
     see your source code on the validation results page after you select the
     &quot;Check&quot;
     button.</p>
<p>Now select the &quot;Validate This File&quot; button. You might have to be
  patient. If it's a busy time of the day, the validator gets bogged down because
  lots of people are using this free service.</p>
<h2>Step 2: What to do if you find an error.</h2>
<p>It's very possible that you will get The Green Bar Of Happiness telling you
  that your page's code is up to snuff.</p>
<p>But if  your file doesn't validate successfully against the W3C specs, then
  you'll be getting a results page telling you the line number of your error
  and what is causing the problem. </p>
<p>This will look a little cryptic at first, but the more you use the Validator,
  the easier this process will become.</p>
<p>For example, say you left out a closing h1 tag at the start of your page.
  Then the validator would tell you something like this:</p>
  
<div class="valid">

<p>Error Line 17, Column 4: Heading cannot be a child of another heading.</p>
<p>&lt;h2&gt;Getting Addicted To Growing Good Things To Eat&lt;/h2&gt;</p>
</div>

<p>This tells you that on Line 17 you
  made a goof. Not sure about that? Then click on the line number (in this case, "17")
  and you'll be taken to the  spot in your code where the error occurred).</p>
<p>But wait a second. Line 17 is fine. Just scroll up the page a bit and there
  you would see:</p>
  
  <div class="valid">
<p>16 &lt;h1&gt;In My Garden</p>
</div>


<p>If you were actually working on this file, you'd make the correction and save
  your file. Then you'd validate it again.</p>
<p>In some cases where there are multiple
  errors, just making one change will fix several errors. You'll like
  that!!</p>
<p>When you work with a file, start with error number 1 and fix that first.
  Save your file, then validate again. Work your way down the file cleaning up
  the errors as you go.</p>
<p>Keep that process going until all of the error messages are gone and you get
  that Green Bar Of Happiness saying, &quot;This document was successfully checked
  as HTML5!&quot;. </p>
<p>By the way, do avail yourself of &quot;Tip Of The Day,&quot; as well as explore
  the links at the top of the page. Lots of very useful information on those
  pages.</p>
<h2>Step 3: Validate the other files.</h2>
<p>Once index.html checks out, then repeat the above process for the other 4
  files until you have 5 error free pages. You can do this!!</p>
<p>Don't get discouraged. This takes a little time but the learning curve will
  flatten with a little patience and practice. Learning how to check for errors
  and fixing them on your own is a very important part of the workflow process
  of creating superior web pages. If you don't validate your files, then working
  with Cascading Styles Sheets will be a nightmare.</p>
<p>I could make the case that I learned how to make web pages when I learned
  how to use validation.</p>
  
  <hr />
  
<p>In the above steps you validated by uploading a file from your computer, but
  the preferred approach is to validate a file by checking it while it's on a
  web server (via URL). Try validating via URL any .html file you have in your
  Work Space. If you're prompted, use your user id and password for this class.</p>
<p>I prefer that you validate from a server <a href="http://validator.w3.org/detailed.html" target="_blank">using
    the URL</a> because users will access your web pages from the server and
    not from your computer. I want the file to validate correctly from the source,
    as users will see it. When you download from your computer, some servers
    put weird things in your files, so it's best to validate By URL.</p>
<p>When you are all done with this lab and have 5 perfectly validated files,
  upload them to your Work Space and I'll take a look.</p>
<p><strong>Going forward, you are to validate all of your files for each lesson.
    No exceptions, but let me know if you have any problems.</strong></p>
<h2>Step 4: Check on other web sites.</h2>
<p>Do all web pages validate? Hardly. But over time I've seen a big improvement
  as designer and developers have come to embrace web design standards.</p>
<p>Try out a few. Go to your favorite sites. Copy and paste the URL of a Page
  into the &quot;Validate By URL&quot; box in the W3C Validator. Do some of them
  validate? Do you notice recurring errors?</p>
<p>While there remain far too many sites that won't validate successfully,
  here are some that, as of the moment, validate to spec. Not all of them are
  using HTML 5.</p>
<p>W3C Home Page <br />
  <a href="http://www.w3.org/" target="_blank">http://www.w3.org/</a></p>
<p>What would you expect?</p>
<p>Wired<br />
  <a href="http://www.wired.com" target="_blank">http://www.wired.com</a></p>
<p>These guys are big enough and hip enough on design to make me think validation
  is important.</p>
<p>A List Apart<br />
  <a href="http://www.alistapart.com" target="_blank">http://www.alistapart.com</a></p>
<p>The best resource on web design for intermediate and expert web designers.</p>


</section>

</div>  <!-- ned clearfix -->

<?php include("includes/footer.php"); ?>


</div> <!-- end wrapper -->

</body>

</html>

