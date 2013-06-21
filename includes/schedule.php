<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

$chapterFile = fopen( "/home2/joyofcod/public_html/intro/includes/intro_chaptersNames.txt", "r" );
$chaptersData = fread( $chapterFile, filesize( "/home2/joyofcod/public_html/intro/includes/intro_chaptersNames.txt" ) );
$chaptersArray = preg_split( "/\n/", trim($chaptersData) );
fclose( $chapterFile );

$UserID = str_replace('.','_',$_SERVER['REMOTE_USER']);
$UserID = str_replace('@','_',$UserID);

// first, get user info from dat file
$studentData = file("/home2/joyofcod/public_html/intro/data/studentData.dat");

foreach ( $studentData as $studentRecord )
{ 
	$studentRecordArray = explode(',',$studentRecord);

	if ( $studentRecordArray[0] == $UserID )
	{
		$FirstName = $studentRecordArray[2];
		$LastName = $studentRecordArray[3];
		$EmailAddress = $studentRecordArray[5];
		$PhoneNumber = $studentRecordArray[4];
		break;
	}
}

/**
* /home1 and /home2 both seem to point to the same place
* not absolutely relevant, since this file will apparently need to
* be removed or re-written. $_SERVER['REMOTE_USER'] is the value
* of the authenticated user, via the pop-up window.

echo "\nremote_user: " . $_SERVER['REMOTE_USER'];
echo '<br>bp0'; echo "<br>user_id: $UserID";
if (file_exists("/home2/joyofcod/public_html/_dev_intro/test"))
   echo "<br>home2 file exists";
else
   echo "<br>home2 file does not exist";

if (file_exists("/home1/joyofcod/public_html/_dev_intro/test"))
   echo "<br>home1 file exists";
else
   echo "<br>home1 file does not exist";
*/

// create student data file if it does not exist (first login)
if (!file_exists( "/home2/joyofcod/public_html/intro/data/schedules/".$UserID.".txt" ))
{
	// check to see if this student started their classes on the old system
	if (file_exists( "/home2/joyofcod/public_html/intro/data/schedules/old/".$UserID.".txt" ))
	{
		$oldFilePath = "/home2/joyofcod/public_html/intro/data/schedules/old/".$UserID.".txt";
		$oldFileInfo = fopen( $oldFilePath, "r" );
		$oldUserData = fread( $oldFileInfo, filesize( $oldFilePath ) );
		$oldUserInfo = preg_split( "/\,/", $oldUserData );
		fclose( $oldFileInfo );
		
		$originalStartDate = strtotime( $oldUserInfo[10] );
		$startDate = date("m/d/y", $originalStartDate);
	}
	else // student does not exist in the old system
	{
		$startDate = date("m/d/y");
	}
	
	$newStudentScheduleFile = "/home2/joyofcod/public_html/intro/data/schedules/".$UserID.".txt";

	// generate schedule
	$scheduleDates = $startDate;
	$daycount = 7;

	for( $i = 0; $i < sizeof( $chaptersArray )-1; $i++ )
	{
		$scheduleDates .= ", ".date("m/d/y", strtotime("+$daycount days",strtotime($startDate)));
		$daycount += 7;
	}
	
	// create student schedule
	$filePath = fopen($newStudentScheduleFile,"w");
	fputs($filePath, $scheduleDates); 
	fclose($filePath); 
	
	// create student workspace directories
	mkdir ("/home2/joyofcod/public_html/intro/workspace/".$UserID);
	mkdir ("/home2/joyofcod/public_html/intro/workspace/".$UserID."/images");
	mkdir ("/home2/joyofcod/public_html/intro/workspace/".$UserID."/styles");
	
	copy("/home2/joyofcod/public_html/intro/labs/6/images/bud_hoeing.jpg", "/home2/joyofcod/public_html/intro/workspace/".$UserID."/images/bud_hoeing.jpg");
	copy("/home2/joyofcod/public_html/intro/labs/6/images/cages.jpg", "/home2/joyofcod/public_html/intro/workspace/".$UserID."/images/cages.jpg");
	copy("/home2/joyofcod/public_html/intro/labs/6/images/cherries.jpg", "/home2/joyofcod/public_html/intro/workspace/".$UserID."/images/cherries.jpg");
	copy("/home2/joyofcod/public_html/intro/labs/6/images/herbs.jpg", "/home2/joyofcod/public_html/intro/workspace/".$UserID."/images/herbs.jpg");
	copy("/home2/joyofcod/public_html/intro/labs/6/images/no_plant.jpg", "/home2/joyofcod/public_html/intro/workspace/".$UserID."/images/no_plant.jpg");
	copy("/home2/joyofcod/public_html/intro/labs/6/images/nursery.jpg", "/home2/joyofcod/public_html/intro/workspace/".$UserID."/images/nursery.jpg");
	copy("/home2/joyofcod/public_html/intro/labs/6/images/overview_bot.gif", "/home2/joyofcod/public_html/intro/workspace/".$UserID."/images/overview_bot.gif");
	copy("/home2/joyofcod/public_html/intro/labs/6/images/overview_top.gif", "/home2/joyofcod/public_html/intro/workspace/".$UserID."/images/overview_top.gif");
	copy("/home2/joyofcod/public_html/intro/labs/6/images/strip.jpg", "/home2/joyofcod/public_html/intro/workspace/".$UserID."/images/strip.jpg");
	copy("/home2/joyofcod/public_html/intro/labs/6/images/tiller.jpg", "/home2/joyofcod/public_html/intro/workspace/".$UserID."/images/tiller.jpg");
	
	// send email
	$filePath = "/home2/joyofcod/public_html/intro/data/schedules/".$UserID.".txt";
	$fileInfo = fopen( $filePath, "r" );
	$userData = fread( $fileInfo, filesize( $filePath ) );
	$userInfo = preg_split( "/\,/", $userData );
	fclose( $fileInfo );

	$Headers = "From: webmaster@joyofcode.com\r\n" ."X-Mailer: php";
	$To = "webmaster@joyofcode.com";
	$EmailSubject = "New student's first log in";
	
 	$EmailMessage  = "A new student started the Joy Of Code workshop today: \n\n";
	$EmailMessage .= "Name: ".$FirstName." ".$LastName."\n";
	$EmailMessage .= "Phone: ".$PhoneNumber."\n";
	$EmailMessage .= "Email: ".$EmailAddress."\n";
	$EmailMessage .= "Start Of Workshop: ".$userInfo[0]."\n";
	$EmailMessage .= "week 2: ".$userInfo[1]."\n";
	$EmailMessage .= "week 3: ".$userInfo[2]."\n";
	$EmailMessage .= "week 4: ".$userInfo[3]."\n";
	$EmailMessage .= "week 5: ".$userInfo[4]."\n";
	$EmailMessage .= "week 6: ".$userInfo[5]."\n";
	$EmailMessage .= "week 7: ".$userInfo[6]."\n";
	$EmailMessage .= "week 8: ".$userInfo[7]."\n";
	$EmailMessage .= "week 9: ".$userInfo[8]."\n";
	$EmailMessage .= "week 10: ".$userInfo[9]."\n";
	
	mail($To, $EmailSubject, $EmailMessage, $Headers);
	
	// first login message
	$SiteMessage = 'Hi '.$FirstName.'. I\'m glad to see that you\'ve started with your class. EnJoy!!';
}
else
{
	// have logged in before
	$SiteMessage = $FirstName.', Welcome Back!!';
}


$filePath = "/home2/joyofcod/public_html/intro/data/schedules/".$UserID.".txt";
$fileInfo = fopen( $filePath, "r" );
$userData = fread( $fileInfo, filesize( $filePath ) );
$userInfo = preg_split( "/\,/", $userData );
fclose( $fileInfo );

$labFile = fopen( "/home2/joyofcod/public_html/intro/includes/intro_labNames.txt", "r" );
$labsData = fread( $labFile, filesize( "/home2/joyofcod/public_html/intro/includes/intro_labNames.txt" ) );
$labsArray = preg_split( "/\n/", trim($labsData) );
fclose( $labFile );

$dateOutput = "";
$lessonOutput = "";
$labOutput = "";

$today = time();

$ctr = 0;
for( $i = 0; $i < sizeof( $chaptersArray ); $i++ )
{
	$lesson_no = $i + 1;
	$active = false;
	$thisTime = strtotime( $userInfo[$ctr] );

	if( $today >= $thisTime ) { $active = true; }
	$dateOutput .= "<li>{$userInfo[$ctr]}</li>";

	/**** Add lesson information to the lessons output variable.****/
	$lessonOutput .= "<li>";

	//if( $active ) { $lessonOutput .= "<a href=\"lesson{$lesson_no}/10.html\">"; }
   if ($lesson_no <= 2)                                  // (for demonstration) if on of first two
      $lessonOutput .= '<a href="lesson' . $lesson_no . '/10.html">';

	$lessonOutput .= $chaptersArray[$i];                  // lesson name

	// if( $active ) { $lessonOutput .= "</a>"; }
   if ($lesson_no <= 2)                                  // (for demonstration) if one of first two
      $lessonOutput .= '</a>';                           // close anchor
	
   $lessonOutput .= "</li>\n";
   /**** _____________________________________________________ ****/




	/**** add lab information to the labs output variable. ****/
   // see above lesson for former if conditionals ($active)
	if ($labsArray[$i] != '')
	{	
		$labOutput .= "<li>";
		if ($lesson_no <= 2)
         $labOutput .= "<a href=\"lab{$lesson_no}.html\">";
		$labOutput .= $labsArray[$i];
		if($lesson_no <= 2)
         $labOutput .= "</a>";
		$labOutput .= "</li>\n";
	}
   /**** _____________________________________________________ ****/
	
	$ctr++;
}
?>

<p id="welcome"><?php echo $SiteMessage; ?></p>

<!--
<div id="weekly">
   <h2>Week</h2>

   <p>Your Schedule</p>

   <ol><?php // echo $dateOutput; ?></ol>
</div>
-->


<div id="lessons">
   <h2>Lessons</h2>

   <p>Reading Material That Goes With Each Lab</p>

   <ol><?php echo $lessonOutput; ?></ol>
</div>


<div id="labs">
   <h2>Labs</h2>

   <p>Hands-on Assignments</p>

   <ol><?php echo $labOutput; ?></ol>
</div>
