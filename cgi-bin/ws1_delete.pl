#!/usr/bin/perl -wT
# author: Barbara Hartmann
# contact: barbara@apartment1.net
# last edited: 8/16/04
use strict;
use CGI;
my $q = new CGI;

####################################################################
# get the loginName
my $TloginName = $q -> param('loginName');
my $loginName;
if ($TloginName =~ /^([\w\-]+)$/) {
     $loginName = $1;
}

####################################################################
# get deleteFile
my $file = $q -> param('deleteFile');
my $deleteFile;
if ($file =~ /^([\w\.\-]+)$/) {
     $deleteFile = $1;
}

####################################################################
# get requestFile
my $TrequestFile = $q -> param('requestFile');
my $requestFile;
if ($TrequestFile =~ /^([\w\.\-]+)$/) {
     $requestFile = $1;
}

####################################################################
# directories
my $backFile = "../workspace/index.html";
my $mainDir = "../workspace/" . $loginName;

####################################################################
# get the directory where we want to delete the file
my $workDir;
if ($requestFile =~ m/images/) {
   $workDir = $mainDir . "/images/";
}
else {
    $workDir = $mainDir . "/";
}

####################################################################
# if the file we want to delete exists
# delete the file and redirect to the file that requested the deleting
if (-e "$workDir$deleteFile") {
     unlink ("$workDir$deleteFile") || printMessage();
     print "Location: $backFile\n\n";
}
####################################################################
# if it does not exists
# print info and promt link to go back to the file that requested the deleting
else {
      printMessage();
}



####################################################################
sub printMessage {
     open (HEAD1, "<../workspace/incl_header1_ws.html") || error("delete file - HTML header 1");
     my @header1 = <HEAD1>;
     close (HEAD1);
     open (HEAD2, "<../workspace/incl_header1_ws.html") || error("delete file - HTML header 2");
     my @header2 = <HEAD2>;
     close (HEAD2);
     open (FOOT, "<../workspace/incl_header1_ws.html") || error("delete file - HTML footer");
     my @footer = <FOOT>;
     close (FOOT);

print <<"message END";
      <?xml version="1.0" encoding="iso-8859-1"?>
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <title>Work Space</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="../ws1/styles/chapters.css" />
      </head>
      <body bgcolor="#FFFFFF" text="#000000">
        <div class="sec">
        <p><strong>Oops.</strong></p>
        <p>Something went wrong during the process of deleting the file $deleteFile.</p>
        <p><a href="$backFile">Go back</a> and try again</p>
        </div>
message END
     print "@header1\n";
     print "<img src=\"../ws1/images/workspace.gif\" alt=\"Work Space\" width=\"590\" height=\"28\" />";
     print "@header2\n";
     print "<p>&nbsp;</p>";
     print "<p>&nbsp;</p>";
     print "<p>&nbsp;</p>";
     print "<p>&nbsp;</p>";
     print "<p>&nbsp;</p>";
     print "<p>&nbsp;</p>";
     print "<p>&nbsp;</p>";
     print "<p>&nbsp;</p>";
     print "@footer\n";
     print "</body>";
     print "</html>";
     die;
}
####################################################################

####################################################################
sub error {
    print "Content-type:txt/html\n\n";
    print "An error occured, please contact the <a href=\"mailto:friendly\@joyofcode.com\">webmaster</a> with the following message:<br>\n";
    print "\"Cannot $_[0]\"";
    die;
}
####################################################################