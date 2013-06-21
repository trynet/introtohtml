#!/usr/bin/perl -wT
#script created by Bud Kraus
#modivied 8/27/05 by Bud Kraus
#last modivied 12/2/12 by Bud Kraus

use strict;
use CGI ':standard';

print "Content-type: text/html\n\n";

print <<SEC1;

        <aside id="sidebar">
<header>
<h1>Front Office</h1>
</header>
<nav>
<ol>


SEC1


 # index
if  ($ENV{DOCUMENT_NAME}  eq 'index.html') {print "<li><strong> Announcements</strong></li>\n"; }
else {print "<li><a href=\"index.html\">Announcements</a></li>\n"; }


# welcome
if  ($ENV{DOCUMENT_NAME}  eq 'welcome.html') {print "<li><strong>Welcome</strong></li>\n"; }
else {print "<li><a href=\"welcome.html\">Welcome</a></li>\n"; }

          #about this class
if  ($ENV{DOCUMENT_NAME}  eq 'this_class.html') {print "<li><stngg>About This Class</strong></li>\n"; }
else {print "<li><a href=\"this_class.html\">About This Class</a></li>\n"; }


 # learning css
if  ($ENV{DOCUMENT_NAME}  eq 'learning_css.html') {print "<li><strong>Learning CSS</strong></li>\n"; }
else {print "<li><a href=\"learning_css.html\">Learning CSS</a></li>\n"; }

#say_hello
if  ($ENV{DOCUMENT_NAME}  eq 'say_hello.html') {print "<li><strong>Say Hello</strong></li>\n"; }
else {print "<li><a href=\"say_hello.html\">Say Hello</a></li>\n"; }

          #schedule
if  ($ENV{DOCUMENT_NAME}  eq 'schedule.html') {print "<li><strong>Schedule</strong></li>\n"; }
else {print "<li><a href=\"schedule.html\">Schedule</a></li>\n"; }

 # change your schedule
if  ($ENV{DOCUMENT_NAME}  eq 'change_schedule.html') {print "<li><strong>Change Your Schedule</strong></li>\n"; }
else {print "<li><a href=\"change_schedule.html\">Change Your Schedule</a></li>\n"; }


          # pvertime
if  ($ENV{DOCUMENT_NAME}  eq 'overtime.html') {print "<li><strong>Overtime</strong></li>\n"; }
else {print "<li><a href=\"overtime.html\">Overtime</a></li>\n"; }

          # faq
if  ($ENV{DOCUMENT_NAME}  eq 'faq.html') {print "<li><strong>FAQ</strong></li>\n"; }
else {print "<li><a href=\"faq.html\">FAQ</a></li>\n"; }


 # terms of service
if  ($ENV{DOCUMENT_NAME}  eq 'tos.html') {print "<li><strong>Terms Of Service</strong></li>\n"; }
else {print "<li><a href=\"tos.html\">Terms Of Service</a></li>\n"; }

          # bookstore
if  ($ENV{DOCUMENT_NAME}  eq 'bookstore.html') {print "<li><strong>Bookstore</strong></li>\n"; }
else {print "<li><a href=\"bookstore.html\">Bookstore</a></li>\n"; }

          # social contacts
if  ($ENV{DOCUMENT_NAME}  eq 'social_contacts.html') {print "<li><strong>Social Contacts</strong></li>\n"; }
else {print "<li><a href=\"social_contacts.html\">Social Contacts</a></li>\n"; }





print <<SEC2;


</ol>
</nav>
</aside>


SEC2












