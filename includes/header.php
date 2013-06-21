<?php
ini_set('error_reporting', E_ALL);

# Navigation Links
# Array of links formatted as
#  link/page : Link Text

$home_links = array(
	"index.html:Home Room",         # Home Room
	"frontoffice:Front Office",     # Front Office
	"code_tester.html:Code Tester", # Code Tester
	"workspace:Work Space" );       # Work Space
		
?>
<header>

<img src="/images/header.png"  alt="Joy Of Code Intro To HTML" />

<nav>
<ul>

<?php 
$thisdoc = $_SERVER['PHP_SELF'];
foreach( $home_links as $link )
{
	echo "<li>";
	$splitLink = preg_split("/:/", $link);
	$fileMatch = preg_replace( "/html/", "php", $splitLink[0] );
	$strMatch = "/^\/{$fileMatch}/";
	if( preg_match( $strMatch, $thisdoc ) )
	{
		echo "<strong>{$splitLink[1]}</strong>";
	} else
	{
		echo "<a href=\"/{$splitLink[0]}\">{$splitLink[1]}</a>";
	}
	echo "</li>\n";
}
?>

</ul>
</nav>

</header>
