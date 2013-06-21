<?php
$chapterFile = fopen( "/home2/joyofcod/public_html/intro/includes/intro_chaptersNames.txt", "r" );
$chaptersData = fread( $chapterFile, filesize( "/home2/joyofcod/public_html/intro/includes/intro_chaptersNames.txt" ) );
$chaptersArray = preg_split( "/\n/", trim($chaptersData) );
fclose( $chapterFile );

$filePath = "/home2/joyofcod/public_html/ws1/WSdata/ws1/{$_SERVER['REMOTE_USER']}.txt";
$fileInfo = fopen( $filePath, "r" );
$userData = fread( $fileInfo, filesize( $filePath ) );
$userInfo = preg_split( "/\,/", $userData );
fclose( $fileInfo );

// if student data file does not exist, create it (first login)
if (!file_exists( "/home2/joyofcod/public_html/intro/data/schedules/{$_SERVER['REMOTE_USER']}.txt" ))
{
	$newStudentScheduleFile = "/home2/joyofcod/public_html/intro/data/schedules/{$_SERVER['REMOTE_USER']}.txt";
	
	// generate new cache file
	$scheduleDates = date("m/d/y");
	$daycount = 7;
	
	for( $i = 0; $i < sizeof( $chaptersArray ); $i++ )
	{
		$scheduleDates .= ", ".date("m/d/y", strtotime("+$daycount days"));
		$daycount += 7;
	}
	
	//echo $scheduleDates;
	
	$fp = fopen($newStudentScheduleFile,"w");
	
	fputs($fp, $scheduleDates); 
	
	fclose($fp); 
}



$labFile = fopen( "/home2/joyofcod/public_html/intro/includes/intro_labNames.txt", "r" );
$labsData = fread( $labFile, filesize( "/home2/joyofcod/public_html/intro/includes/intro_labNames.txt" ) );
$labsArray = preg_split( "/\n/", trim($labsData) );
fclose( $labFile );

$dateOutput = "";
$lessonOutput = "";
$labOutput = "";

$today = time();

$ctr = 10;
for( $i = 0; $i < sizeof( $chaptersArray ); $i++ )
{
	$lesson_no = $i + 1;
	$active = false;
	$thisTime = strtotime( $userInfo[$ctr] );

	if( $today >= $thisTime ) { $active = true; }
	$dateOutput .= "<li>{$userInfo[$ctr]}</li>";

	// Add lesson information to the lessons output variable.
	$lessonOutput .= "<li>";
	if( $active ) { $lessonOutput .= "<a href=\"lesson{$lesson_no}/10.html\">"; }
	$lessonOutput .= $chaptersArray[$i];
	if( $active ) { $lessonOutput .= "</a>"; }
	$lessonOutput .= "</li>\n";

	// add lab information to the labs output variable.	
	$labOutput .= "<li>";
	if( $active ) { $labOutput .= "<a href=\"lab{$lesson_no}.html\">"; }
	$labOutput .= $labsArray[$i];
	if( $active ) { $labOutput .= "</a>"; }
	$labOutput .= "</li>\n";

	$ctr++;
}
?>

<div id="weekly">
<h2>Week</h2>

<ol>

<?php echo $dateOutput; ?>

</ol>

</div>


<div id="lessons">

<h2>Lessons</h2>

<ol>

<?php echo $lessonOutput; ?>

</ol>

<p>The reading material that goes with each lab.</p>

</div>


<div id="labs">

<h2>Labs</h2>

<ol>

<?php echo $labOutput; ?>

</ol>

<p>Your hands-on assignments for each lesson.</p>

</div>
