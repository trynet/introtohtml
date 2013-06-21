#!/usr/bin/perl -w
# author: Barbara Hartmann
# contact: barbara@apartment1.net
# last edited: 5/13/05
use strict;
use CGI;
my $q = new CGI;

require 'ws1_library.pl';

####################################################################
# get the loginName
my $TloginName = $q -> param('loginName');
my $loginName;
if ($TloginName =~ /^([\w\-]+)$/) {
     $loginName = $1;
}

####################################################################
# get the uploadFileName (entered by user)
my $Tfilename = $q -> param('fileName');
my $fileName;
if ($Tfilename =~ /^([\w\.\-]+)$/) {
     $fileName = $1;
     $fileName =~ s/^[\-\.]+//;
}

####################################################################
# get requestFile
my $TrequestFile = $q -> param('requestFile');
my $requestFile;
if ($TrequestFile =~ /^([\w\.\-]+)$/) {
     $requestFile = $1;
}

unless ($loginName && $fileName && $requestFile) {
         print "Content-type:text/html\n\n";
         print "<p>Some data got lost in the overwrite process. Please try again.</p>";
         die;
}

my $backFile = "../workspace/index.html";
my $mainDir = "../workspace/" . $loginName;

my $sendEmail = "yes";  # Variable weather or not to send email on upload

####################################################################
# get the current directory
my $workDir;
if ($requestFile =~ m/images/) {
  $sendEmail = "no";
  $workDir = $mainDir . "/images/";
}
else {
  $workDir = $mainDir . "/";
}

####################################################################
# rename tempFile to $fileName
my $temp = $workDir . "tempFile";
rename ("$temp", "$workDir$fileName") || error("overwrite file");

###########################################################################
## email Bud about upload
###########################################################################
if ($sendEmail eq "yes") {
   sendmailUpload($loginName, $fileName, $workDir);
}

####################################################################
# redirect to workspace
print "Location: $backFile\n\n";

####################################################################
sub error {
    print "Content-type:txt/html\n\n";
    print "An error occured, please contact the <a href=\"mailto:friendly\@joyofcode.com\">webmaster</a> with the following message:<br>\n";
    print "\"Cannot $_[0]\"";
    die;
}
####################################################################