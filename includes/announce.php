<?php

$UserID = str_replace('.','_',$_SERVER['REMOTE_USER']);
$UserID = str_replace('@','_',$UserID);

$filePath = "/home2/joyofcod/public_html/intro/data/schedules/".$UserID.".txt";
$fileInfo = fopen( $filePath, "r" );
$userData = fread( $fileInfo, filesize( $filePath ) );
$userInfo = preg_split( "/\,/", $userData );
fclose( $fileInfo );

$chapterFile = fopen( "/home2/joyofcod/public_html/intro/includes/intro_chaptersNames.txt", "r" );
$chaptersData = fread( $chapterFile, filesize( "/home2/joyofcod/public_html/intro/includes/intro_chaptersNames.txt" ) );
$chaptersArray = preg_split( "/\n/", trim($chaptersData) );
fclose( $chapterFile );

$today = time();

//for( $ctr = (sizeof( $userInfo ) - 1) - 2; $ctr >= 1; $ctr-- )
for ($ctr=sizeof( $userInfo )-1;$ctr >= 0;$ctr--)
{
  //$lessonCounter = $ctr - 10;
  $thisDate = strtotime( $userInfo[$ctr] );
  if( $today >= $thisDate )
  {
    echo "<h2>Lesson ".($ctr+1)." - " . $chaptersArray[$ctr] . "</h2>";
    echo "<p><strong>" . $userInfo[$ctr] . "</strong></p>";
    require 'incl_ann'.($ctr+1).'.php';
  }
}

?>
