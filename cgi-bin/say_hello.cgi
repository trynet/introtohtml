#!/usr/bin/perl -w
use strict;

use CGI ':standard';


my $IN = new CGI;


my ($last_name, $first_name, $occ, $know_html, $know_css, $know_imgs, $live, $where, @ed, $ed2, $os, $os2, $skills_used, $taken_before, $why_taking, $joy_gems, $to, $from, $subject);








$to = "webmaster\@joyofcode.com"; #$IN->param ('to');
#$to = "barbara\@apartment1.net"; #$IN->param ('to');

$from = "webmaster\@joyofcode.com"; #$IN->param('from');

$subject = "JOC Student Intro Survey From"; #$IN->param('subject');

my $Tfirst_name = $IN->param('first_name');
my $Tlast_name = $IN->param('last_name');
my $Tocc = $IN->param('occ');
my $Tknow_html = $IN->param('know_html');
my $Tknow_css = $IN->param('know_css');
my $Tknow_imgs = $IN->param('know_imgs');
my $Tlive = $IN->param('live');
my $Twhere = $IN->param('where');
my @Ted = $IN->param('ed');
my $Ted2 = $IN->param('ed2');
my $Tos = $IN->param('os');
my $Tos2 = $IN->param('os2');
my $Tskills_used = $IN->param('skills_used');
my $Ttaken_before = $IN->param('taken_before');
my $Twhy_taking = $IN->param('why_taking');
my $Tjoy_gems = $IN->param('joy_gems');

my $valid = 1;
if ($Tfirst_name =~ /^([\w \-]+)$/) {
     $first_name = $1;
}
else {
      $valid = 0;
}
if ($Tlast_name =~ /^([\w \-']+)$/) {
     $last_name = $1;
}
else {
      $valid = 0;
}
if ($Tocc =~ /^([\w \-\/]*)$/) {
     $occ = $1;
}
else {
      $valid = 0;
}
if ($Tknow_html =~ /^([\w \-]*)$/) {
     $know_html = $1;
}
else {
      $valid = 0;
}
if ($Tknow_css =~ /^([\w \-]*)$/) {
     $know_css = $1;
}
else {
      $valid = 0;
}
if ($Tknow_imgs =~ /^([\w \-]*)$/) {
     $know_imgs = $1;
}
else {
      $valid = 0;
}
if ($Tlive =~ /^([\w \-',&\.\(\)\;:"]*)$/) {
     $live = $1;
}
else {
      $valid = 0;
}
if ($Twhere =~ /^([\w \-]*)$/) {
     $where = $1;
}
else {
      $valid = 0;
}
if (@Ted =~ /^([\w \-]*)$/) {
     @ed = $1;
}
else {
      $valid = 0;
}
if ($Ted2 =~ /^([\w \-',&\.\(\)\;:"]*)$/) {
     $ed2 = $1;
}
else {
      $valid = 0;
}
if ($Tos =~ /^([\w \-]*)$/) {
     $os = $1;
}
else {
      $valid = 0;
}
if ($Tos2 =~ /^([\w \-',&\.\(\)\;:"]*)$/) {
     $os2 = $1;
}
else {
      $valid = 0;
}
if ($Tskills_used =~ /^([\w \-]*)$/) {
     $skills_used = $1;
}
else {
      $valid = 0;
}
if ($Ttaken_before =~ /^([\w \-]*)$/) {
     $taken_before = $1;
}
else {
      $valid = 0;
}
if ($Twhy_taking =~ /^([\w \-',&\.\(\)\;:"?]*)$/) {
     $why_taking = $1;
}
else {
      $valid = 0;
}
if ($Tjoy_gems =~ /^([\w \-]*)$/) {
     $joy_gems = $1;
}
else {
      $valid = 0;
}

if ($valid) {
print "Content-type: text/html \n\n";
open (MAIL, "|/usr/lib/sendmail -t")  || die &error ("Sendmail error : $!");


print MAIL "To: $to \nFrom: $from\n";


print MAIL "Subject: $subject $first_name $last_name\n\n";


print MAIL "\n";


print MAIL "Name: $first_name $last_name\n";


print MAIL "Occupation: $occ\n";


print MAIL "Know HTML: $know_html\n";


print MAIL "Know CSS: $know_css\n";

print MAIL "Know Images: $know_imgs\n";

print MAIL "Location: $live\n";

print MAIL "Where Taking WS?: $where\n";

print MAIL "Experience With HTML Editors?: @ed $ed2\n";

print MAIL "Operating System: $os $os2\n";

print MAIL "Where The Skills Will Be Used: $skills_used\n";

print MAIL "Taken An Online Course Before?: $taken_before\n";

print MAIL "Reason Taking Joy: $why_taking\n";

print MAIL "Subscribe To JG: $joy_gems\n";

print MAIL "\n";


close (MAIL);

print "<!DOCTYPE html>";

print "<html>";

print "<head>";

print "<meta charset=\"utf-8\" />";

print "<title>Front Office</title>";

print "<link rel=\"stylesheet\" type=\"text/css\" href=\"../styles/styles.css\" />";

print "</head>";

print "<body>";

print <<"FILETOP";



<div id="wrapper">

<header>

<img src="/images/header.png"  alt="Joy Of Code Intro To HTML" />

<nav>
<ul>

<li><a href="/index.html">Home Room</a></li>
<li><strong>Front Office</strong></li>
<li><a href="/code_tester.html">Code Tester</a></li>

<li><a href="/workspace">Work Space</a></li>

</ul>
</nav>

</header>

<div class="clearfix">

<section id="main">


<h1>Say Hello</h1>

FILETOP

  print "<p><strong>THANKS $first_name!!</strong></p>";

print "<p>That wasn't too bad, was it?</p>";



print <<"FILEBOT";

</section>

<aside id="sidebar" style="margin-bottom:30px;>

   <header>

      <h1>Front Office</h1>
   </header>
   
   <nav>
   
      <ol>
   
		<li><a href="../frontoffice/index.html">Announcements</a></li>
<li><a href="../frontoffice/welcome.html">Welcome</a></li><li><a href="../frontoffice/this_class.html">About This Class</a></li><li><a href="../frontoffice/learning_css.html">Learning CSS</a></li><li><strong>Say Hello</strong></li><li><a href="../frontoffice/schedule.html">Schedule</a></li><li><a href="../frontoffice/change_schedule.html">Change Your Schedule</a></li><li><a href="../frontoffice/overtime.html">Overtime</a></li><li><a href="../frontoffice/faq.html">FAQ</a></li><li><a href="../frontoffice/tos.html">Terms Of Service</a></li><li><a href="../frontoffice/bookstore.html">Bookstore</a></li><li><a href="../frontoffice/social_contacts.html">I'm Social, How 'Bout You?</a></li>   
   	</ol>

   
   </nav>

</aside>
</div>  <!-- ned clearfix -->

   

<footer>

<nav>
<ul>
<li><a href="http://introtohtml.net">Home Room</a> | </li> 
<li><a href="http://introtohtml.net/frontoffice/">Front Office</a> | </li> 

<li><a href="http://introtohtml.net/code_tester.html">Code Tester</a> | </li> 
<li><a href="http://introtohtml.net/workspace/">Work Space</a> </li>
</ul>
</nav>

<div id="end">
&copy; 2012 TryNet, Inc. All Rights Reserved.
</div>


</div> <!-- end wrapper -->



FILEBOT


print "</body>";

print "</html>";

} # if($valid)
else {
      print "Location: ../ws1/frontoffice/say_hello.html\n\n";
} # else of if($valid)