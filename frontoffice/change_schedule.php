<?php

	$UserID = str_replace('.','_',$_SERVER['REMOTE_USER']);
	$UserID = str_replace('@','_',$UserID);

	// get chapters
	$chapterFile = fopen( "/home2/joyofcod/public_html/intro/includes/intro_chaptersNames.txt", "r" );
	$chaptersData = fread( $chapterFile, filesize( "/home2/joyofcod/public_html/intro/includes/intro_chaptersNames.txt" ) );
	$chaptersArray = preg_split( "/\n/", trim($chaptersData) );
	fclose( $chapterFile );

	// get schedule
	$filePath = "/home2/joyofcod/public_html/intro/data/schedules/".$UserID.".txt";
	$fileInfo = fopen( $filePath, "r" );
	$userData = fread( $fileInfo, filesize( $filePath ) );
	$userInfo = preg_split( "/\,/", $userData );
	fclose( $fileInfo );
	
	$labFile = fopen( "/home2/joyofcod/public_html/intro/includes/intro_labNames.txt", "r" );
	$labsData = fread( $labFile, filesize( "/home2/joyofcod/public_html/intro/includes/intro_labNames.txt" ) );
	$labsArray = preg_split( "/\n/", trim($labsData) );
	fclose( $labFile );
	
	$today = time();

?>

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


<h1>Change Your Schedule</h1>

<p>Don't like waiting a whole week until you get the next Lesson and Lab?
  Well then, you can adjust the schedule of your class so that it meets the
  needs of your busy schedule. That means you're not tied to reading <strong>one </strong> lesson
   and doing <strong>one </strong> lab every seven days .</p>
   
     <div style="width:75%;padding:10px;margin:0 auto;border:2px dotted #000080;">
  <p><strong>NOTE:</strong> You can still fill out this form but please DO NOT
    try to submit it as it will not work. After you fill everything out you can
    copy and paste the information from this page to an email. I will soon get
    the submit button to work. Sorry for the inconvenience.</p>
  </div>
  
<p>Yes, you can keep the schedule as it was when you first logged in, but, if
  that becomes inconvenient, you have the chance to customize your class schedule.</p>
<p>Changing your class's schedule may affect the way you learn the material,
  so before you Jump For Joy (get it - Joy?), think this over:</p>
  
<h2>Two Reasons Why You Might Like To Change The Schedule</h2>
<ol>
  <li><strong>Time the Chapters and Labs To Meet the Needs of Your Schedule</strong>
    <p>Using the Schedule  Changer below provides flexibility to take the workshop
      on a schedule that adjusts to your needs because you will decide when you
      want to start each lesson and lab.</p>
  </li>
  <li><strong>Speed Up the Pace of the Class So You Can Learn Faster</strong>
    <p>However, remember to allow yourself time to absorb what you're learning,
      especially as you get into the later Lessons and Labs. </p>
  </li>

</ol>
<h2>Four Things You <em><strong>MUST</strong></em> Know Before You Change Anything </h2>
<ol>
  <li>
    <p>I'll still review your lab files within 48 hours, and often times sooner.
      That's not going to change.</p>
  </li>
  <li>
    <p>As always, no material from the workshop is ever removed once you've seen
      it. For example, if you're in Lesson 5 and make a schedule change the
      material you've already seen in earlier Lesson and Labs will still be
      there.</p>
  </li>
  <li>
    <p>You can only change your schedule once so think about how you want to
      do this before you hit the submit button.</p>
  </li>
  <li>
    <p>When you change your schedule you'll be <strong>shortening the time you
        have to take Intro To HTML</strong>. You'll still be able to get some
        extra time after Lesson 10 but you need to read about <a href="overtime.html">Overtime</a> before
        you make a decision. </p>
  </li>
</ol>
<h2>Making a Change</h2>
<p>Fill out this form to change the timing of when you will have access to future
  lessons and labs.</p>
  
  <form method="post" action="../cgi-bin/ws1_schedule_change_email.pl">

<?php for( $i = 0; $i < sizeof( $chaptersArray ); $i++ ) { ?>

	<?php 
		$active = true; 
		$thisTime = strtotime( $userInfo[$i] );
		
		if( $today >= $thisTime ) 
		{ 
			$active = false; 
		}
	?>

   <ul class="schedule clearfix">
   <li><strong><?php echo $chaptersArray[$i]; ?></strong></li>
   <li><strong>Lab <?php echo $i+1; ?> - <?php echo $labsArray[$i]; ?></strong></li>
   <li>Starts <?php echo $userInfo[$i]; ?></li>
	<?php if (1==1) { ?><li>Change To <input type="text" name="timeframe<?php echo $i; ?>"/></li><? } ?>
   </ul>
   <input type="hidden" name="oldtimeframe<?php echo $i; ?>" value="<?php echo $userInfo[$i]; ?>" />

<?php } ?>

<input type="hidden" name="loginName" value="<?php echo $UserID; ?>" />


<!--<ul class="schedule clearfix">
<li><strong>Lesson 2 - Fundamental Elements</strong></li>
<li><strong> Lab 2 - First Tags</strong></li><br />
<li>Starts 01/01/12</li>
<li>Change To <input .type="text" name="week2"/></li>
</ul>


<ul class="schedule clearfix">
<li><strong>Lesson 3 - Lists</strong></li>
<li><strong> Lab 3 - First Lists</strong></li><br />
<li>Starts 01/01/12</li>
<li>Change To <input .type="text" name="week3" /></li>
</ul>

<ul class="schedule clearfix">
<li><strong>Lesson 4 - Validation</strong></li>
<li> <strong>Lab 4 - First Checking</strong></li><br />
<li>Starts 01/01/12</li>
<li>Change To <input .type="text" name="week4" /></li>
</ul>

<ul class="schedule clearfix">
<li><strong>Lesson 5 - Links</strong></li>
<li><strong> Lab 5 - First Site</strong></li><br />
<li>Starts 01/01/12</li>
<li>Change To <input .type="text" name="week5" /></li>
</ul>

<ul class="schedule clearfix">
<li><strong>Lesson 6 - Images And Videos</strong></li>
<li><strong>Lab 56 - First Embeds</strong></li><br ./>
<li>Starts 01/01/12</li>
<li>Change To <input .type="text" name="week6" /></li>
</ul>


<ul class="schedule clearfix">
<li><strong>Lesson 7 - Forms</strong></li>
<li><strong>Lab 57 - First Forms</strong></li><br />
<li>Starts 01/01/12</li>
<li>Change To <input .type="text" name="week7" /></li>
</ul>


<ul class="schedule clearfix">
<li><strong>Lesson 8 - Data Tables</strong></li>
<li><strong>Lab 57 - First Tables</strong></li><br />
<li>Starts 01/01/12</li>
<li>Change To <input .type="text" name="week8" /></li>
</ul>


<ul class="schedule clearfix">
<li><strong>Lesson 9 - Grouping Elements</strong></li>
<li><strong>Lab 9 - First Grouping</strong></li><br />
<li>Starts 01/01/12</li>
<li>Change To <input .type="text" name="week9" /></li>
</ul>


<ul class="schedule clearfix">
<li><strong>Lesson 10 - A Look At CSS</strong></li><br  />
<li>Starts 01/01/12</li>
<li>Change To <input .type="text" name="week10" /></li>
</ul>-->


<input type="submit" name="submit" value="submit" />

</form>

<p>Note: These changes will not happen automatically.  I have to make the changes manually in the system so please give me 24 hours to take care of your request.</p>



</section>

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



