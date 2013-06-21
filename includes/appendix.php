<?php
$chapterFile = fopen( "/home2/joyofcod/public_html/intro/includes/intro_chaptersNames.txt", "r" );
$chaptersData = fread( $chapterFile, filesize( "/home2/joyofcod/public_html/intro/includes/intro_chaptersNames.txt" ) );
$chaptersArray = preg_split( "/\n/", trim($chaptersData) );
fclose( $chapterFile );

$appendixFile = fopen( "/home2/joyofcod/public_html/intro/includes/intro_appendixNames.txt", "r" );
$appendixData = fread( $appendixFile, filesize( "/home2/joyofcod/public_html/intro/includes/intro_appendixNames.txt" ) );
$appendixArray = preg_split( "/\n/", trim($appendixData) );
fclose( $appendixFile );

$UserID = str_replace('.','_',$_SERVER['REMOTE_USER']);
$UserID = str_replace('@','_',$UserID);

$filePath = "/home2/joyofcod/public_html/intro/data/schedules/".$UserID.".txt";
$fileInfo = fopen( $filePath, "r" );
$userData = fread( $fileInfo, filesize( $filePath ) );
$userInfo = preg_split( "/\,/", $userData );
fclose( $fileInfo );

$today = time(); //Today in seconds.
$startingDate = strtotime($userInfo[0]); //The first day of the students' class.
$oneWeek = 604800; //In Seconds.
?>

<h2>Appendices</h2>

<p>All the stuff that I could not fit into the Lessons</p>

<ul>
<?php
foreach( $appendixArray as $appendix )
{
  $active = false;
  $appLine = preg_split("/\|/", trim($appendix));
  $dateToOpenAppendix = $startingDate + ( $oneWeek * $appLine[0] ); //Multiply the "number of weeks" element by the number of 
                                                                    //seconds in one week, then add that to the starting date.
	// display appendix																			  
	echo "<li>{$appLine[1]} - ";

 	if( $today >= $dateToOpenAppendix ) //If we're past or at the x-week mark, link to the resource.
  		echo "<a href=\"appendix/{$appLine[1]}.html\">";
	
	echo "{$appLine[2]}";
	 
  	if( $today >= $dateToOpenAppendix ) //If we're past or at the x-week mark, link to the resource.
  		echo "</a>";
		
  	echo "</li>";
}
?>
</ul>
