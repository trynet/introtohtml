#!/usr/bin/perl -wT
# author: Barbara Hartmann
# contact: barbara@apartment1.net
# last edited: 5/13/05
use strict;
use CGI;



#my $datFilename = "/home2/joyofcod/www/intro/data/studentData.dat";

#my $q = new CGI;

####################################################################
# get UserID

#my $TloginName = $q -> param('loginName');
#my $loginName;
#if ($TloginName =~ /^([\w\-]+)$/) {
#     $loginName = $1;
#}

####################################################################
# get requested schedule

#my $NewSchedule1 = $q -> param('timeframe0');
#my $NewSchedule2 = $q -> param('timeframe1');
#my $NewSchedule3 = $q -> param('timeframe2');
#my $NewSchedule4 = $q -> param('timeframe3');
#my $NewSchedule5 = $q -> param('timeframe4');
#my $NewSchedule6 = $q -> param('timeframe5');
#my $NewSchedule7 = $q -> param('timeframe6');
#my $NewSchedule8 = $q -> param('timeframe7');
#my $NewSchedule9 = $q -> param('timeframe8');
#my $NewSchedule10 = $q -> param('timeframe9');
#
# get old schedule
#my $OldSchedule1 = $q -> param('oldtimeframe0');
#my $OldSchedule2 = $q -> param('oldtimeframe1');
#my $OldSchedule3 = $q -> param('oldtimeframe2');
#my $OldSchedule4 = $q -> param('oldtimeframe3');
#my $OldSchedule5 = $q -> param('oldtimeframe4');
#my $OldSchedule6 = $q -> param('oldtimeframe5');
#my $OldSchedule7 = $q -> param('oldtimeframe6');
#my $OldSchedule8 = $q -> param('oldtimeframe7');
#my $OldSchedule9 = $q -> param('oldtimeframe7');
#my $OldSchedule10 = $q -> param('oldtimeframe9');

#send email
# open (DATDATA, "<$datFilename") || error("read user information");
# flock (DATDATA, 2);
# my @datData = <DATDATA>;
# close (DATDATA);
# format the array and find the right person
# foreach my $datData(@datData) {
       # break each array item into an individual array (break point is ", ")
#        $datData =~ s/"//g;
#        @studentData = split (/, /,$datData);
#        # when the item equals the LogInName end the loop
#        if ($studentData[0] eq $_[0]) {
#             last;
#        }
# }

my $to = "kevin.andrew.lynch@\@gmail.com";
my $from = "webmaster\@joyofcode.com";
my $subject = "Student Schedule Change Requested";
my $body = "A student has requested a change to their schedule: \n\n";
#$body .= "Name: $studentData[2] $studentData[3]\n";
#$body .= "Phone: $studentData[4]\n";
#$body .= "Email: $studentData[5]\n";
$body .= "Schedule of workshop:\n";

#$body .= "old week 1: $OldSchedule1 - new week 1: $NewSchedule1\n";
#$body .= "old week 2: $OldSchedule2 - new week 2: $NewSchedule2\n";
#$body .= "old week 3: $OldSchedule3 - new week 3: $NewSchedule3\n";
#$body .= "old week 4: $OldSchedule4 - new week 4: $NewSchedule4\n";
#$body .= "old week 5: $OldSchedule5 - new week 5: $NewSchedule5\n";
#$body .= "old week 6: $OldSchedule6 - new week 6: $NewSchedule6\n";
#$body .= "old week 7: $OldSchedule7 - new week 7: $NewSchedule7\n";
#$body .= "old week 8: $OldSchedule8 - new week 8: $NewSchedule8\n";
#$body .= "old week 9: $OldSchedule9 - new week 9: $NewSchedule9\n";
#$body .= "old week 10: $OldSchedule10 - new week 10: $NewSchedule10\n";

#open (MAIL, "|/usr/lib/sendmail -t")  || die &error ("Sendmail error : $!");
#print MAIL "To: $to \nFrom: $from\n";
#print MAIL "Subject: $subject\n\n";
#print MAIL "$body\n";
#print MAIL "\n";
#close (MAIL);
print "Content-type:text/html\n\n";
#print "Location: http://introtohtml.net/frontoffice/change_schedule.html\n\n";
redirect("http://introtohtml.net/frontoffice/change_schedule.html");