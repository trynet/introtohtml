#!/usr/bin/perl -w
# author: Barbara Hartmann
# contact: barbara@apartment1.net
# last edited: 12/12/11 by Bud Kraus
use strict;
use CGI ':standard';
require 'intro_library.pl';

my $loginName = getUserID();

####################################################################
# get current week and schedule dates
my $thisWeek = getCurrentWeek($loginName);
my @studentDates = readTXT($loginName);

####################################################################
# get names of chapters
# make changes in the respective source files
my @chapterNames = readChapterNames(); # source: "ws1/newintro_chapterNames.txt"

####################################################################
# path to the announcements
my $announcePath = "../ws1/new/frontoffice/";

####################################################################
####################################################################
# BUD KRAUS: announcement headers, change HTML here
####################################################################
# Revised by Bud Kraus 4/2010
####################################################################
my $week1 = "<h2>Lesson 1 - $chapterNames[0]</h2><p><strong>$studentDates[10]</strong></p>";
my $week2 = "<h2>Lesson 2 - $chapterNames[1]</h2><p><strong>$studentDates[11]</strong></p>";
my $week3 = "<h2>Lesson 3 - $chapterNames[2]</h2><p><strong>$studentDates[12]</strong></p>";
my $week4 = "<h2>Lesson 4 - $chapterNames[3]</h2><p><strong>$studentDates[13]</strong></p>";
my $week5 = "<h2>Lesson 5 - $chapterNames[4]</h2><p><strong>$studentDates[14]</strong></p>";
my $week6 = "<h2>Lesson 6 - $chapterNames[5]</h2><p><strong>$studentDates[15]</strong></p>";
my $week7 = "<h2>Lesson 7 - $chapterNames[6]</h2><p><strong>$studentDates[16]</strong></p>";
my $week8 = "<h2>Lesson 8 - $chapterNames[7]</h2><p><strong>$studentDates[17]</strong></p>";
my $week9 = "<h2>Lesson 9 - $chapterNames[8]</h2><p><strong>$studentDates[18]</strong></p>";
my $week10 = "<h2>Lesson 10 - $chapterNames[9]</h2><p><strong>$studentDates[19]</strong></p>";


####################################################################
####################################################################
####################################################################

####################################################################
# print weekly titles, dates, and announcements
print "Content-type:text/html\n\n";



if ($thisWeek >= 10) {
     my $path = $announcePath . "incl_ann10.html";
     open (DATA10, "<$path");
     flock (DATA10, 2);
     my @AnnounceWeek10 = <DATA10>;
     close (DATA10);
     print "$week10\n";
     print "@AnnounceWeek10<br />\n";
}
if ($thisWeek >= 9) {
     my $path = $announcePath . "incl_ann9.html";
     open (DATA9, "<$path");
     flock (DATA9, 2);
     my @AnnounceWeek9 = <DATA9>;
     close (DATA9);
     print "$week9\n";
     print "@AnnounceWeek9<br />\n";
}
if ($thisWeek >= 8) {
     my $path = $announcePath . "incl_ann8.html";
     open (DATA8, "<$path");
     flock (DATA8, 2);
     my @AnnounceWeek8 = <DATA8>;
     close (DATA8);
     print "$week8\n";
     print "@AnnounceWeek8<br />\n";
}
if ($thisWeek >= 7) {
     my $path = $announcePath . "incl_ann7.html";
     open (DATA7, "<$path");
     flock (DATA7, 2);
     my @AnnounceWeek7 = <DATA7>;
     close (DATA7);
     print "$week7\n";
     print "@AnnounceWeek7<br />\n";
}
if ($thisWeek >= 6) {
     my $path = $announcePath . "incl_ann6.html";
     open (DATA6, "<$path");
     flock (DATA6, 2);
     my @AnnounceWeek6 = <DATA6>;
     close (DATA6);
     print "$week6\n";
     print "@AnnounceWeek6<br />\n";
}
if ($thisWeek >= 5) {
     my $path = $announcePath . "incl_ann5.html";
     open (DATA5, "<$path");
     flock (DATA5, 2);
     my @AnnounceWeek5 = <DATA5>;
     close (DATA5);
     print "$week5\n";
     print "@AnnounceWeek5<br />\n";
}
if ($thisWeek >= 4) {
     my $path = $announcePath . "incl_ann4.html";
     open (DATA4, "<$path");
     flock (DATA4, 2);
     my @AnnounceWeek4 = <DATA4>;
     close (DATA4);
     print "$week4\n";
     print "@AnnounceWeek4<br />\n";
}
if ($thisWeek >= 3) {
     my $path = $announcePath . "incl_ann3.html";
     open (DATA3, "<$path");
     flock (DATA3, 2);
     my @AnnounceWeek3 = <DATA3>;
     close (DATA3);
     print "$week3\n";
     print "@AnnounceWeek3<br />\n";
}
if ($thisWeek >= 2) {
     my $path = $announcePath . "incl_ann2.html";
     open (DATA2, "<$path");
     flock (DATA2, 2);
     my @AnnounceWeek2 = <DATA2>;
     close (DATA2);
     print "$week2\n";
     print "@AnnounceWeek2<br />\n";
}
if ($thisWeek >= 1) {
     my $path = $announcePath . "incl_ann1.html";
     open (DATA1, "<$path");
     flock (DATA1, 2);
     my @AnnounceWeek1 = <DATA1>;
     close (DATA1);
     print "$week1\n";
     print "@AnnounceWeek1<br />\n";
}
