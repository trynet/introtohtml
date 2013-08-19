<?php
$fhLabs = fopen( "/home2/joyofcod/public_html/intro/includes/intro_labNames.txt", "r" );
$labs = fread( $fhLabs, filesize( "/home2/joyofcod/public_html/intro/includes/intro_labNames.txt" ) );
fclose( $fhLabs );

$fhLessons = fopen( "/home2/joyofcod/public_html/intro/includes/intro_lessonNames.txt", "r" );
$lessons = fread( $fhLessons, filesize( "/home2/joyofcod/public_html/intro/includes/intro_lessonNames.txt" ) );
fclose( $fhLessons );

$lesson_sidebars = array();

$labsArray = preg_split( "/\n/", $labs );
$lessonsArray = preg_split( "/\n/", $lessons );

function print_sidebar( $chapterNumber, $lessonNumber )
{
global $labsArray;
global $lessonsArray;
?>
        <aside id="sidebar">
		<header>
			<h1>Pages In This Lesson</h1>
		</header>
		<nav>
			<ol>
<?php
for( $i = 0; $i < sizeof( $lessonsArray ); $i ++ )
{
	if( $chapterNumber == ($i+1) )
	{
		$sidebarArray = preg_split( "/\|/", $lessonsArray[$i] );
		for( $j = 0; $j < sizeof( $sidebarArray ); $j++ )
		{
			echo "<li>";
			if( $lessonNumber == ($j+1) )
			{
				echo "<strong>{$sidebarArray[$j]}</strong>";
			} else
			{
				$linkFile = (($j+1)*10) . ".html";
				echo "<a href=\"../lesson".($i+1)."/{$linkFile}\">{$sidebarArray[$j]}</a>";
			}
			echo "</li>\n";
		}
	}
}
?>
			</ol>
		</nav>

<?php
for( $i = 0; $i < sizeof( $labsArray ); $i++ )
{
	$labno = $i + 1;
	if( $chapterNumber == ($labno) )
	{
		echo "<p class=\"btn btn-large\"><a  href=\"../lab{$labno}.html\"><i class=\"icon-hand-right\"></i>Lab {$labno}: {$labsArray[$i]}</a></p>";
	}
}
?>
</aside>

<?php
}
?>
