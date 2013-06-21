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
my $file = $q -> param('file');
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
my $backFile = "../workspace/" . $requestFile;
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
# print HTML header
print "Content-type:text/html\n\n";
open (HEAD1, "<../workspace/incl_header1_ws.html") || error("delete file - HTML header 1");
my @header1 = <HEAD1>;
close (HEAD1);
open (HEAD2, "<../workspace/incl_header2_ws.html") || error("delete file - HTML header 2");
my @header2 = <HEAD2>;
close (HEAD2);

print <<"header END";

<!DOCTYPE html>

<html>


<head>

<title>Work Space</title>

<meta charset="utf-8" />

<link rel="stylesheet" href="../styles/styles.css" />


</head>

<body>

@header1

  @header2
  <div class="sec">
header END

####################################################################
# if the file we want to delete exists
# print confirmation form w/ hidden fields for loginName, deleteFile, and requestFile
if (-e "$workDir$deleteFile") {
print <<"deleteForm END";
       <form action="ws1_delete.pl" method="post">
         <p>Are you sure you want to delete $deleteFile?</p>
         <p>
         <strong>Yes</strong>
         <input type="hidden" name="loginName" value="$loginName" />
         <input type="hidden" name="deleteFile" value="$deleteFile" />
         <input type="hidden" name="requestFile" value="$requestFile" />
         <input type="submit" value="Delete The File" />
         </p>
       </form>
       <p><strong>No.</strong> I changed my mind and want to <a href="$backFile">Go Back</a>.</p>
deleteForm END
}

####################################################################
# if it does not exists
# print info and link to go back to the file that requested the deleting
else {
     print "<p><strong>Oops.</strong></p>";
     print "<p>There is no file named $deleteFile.</p>\n";
     print "<p><a href=\"$backFile\">Go back</a> and try again</p>";
}

####################################################################
# print HTML footer
open (FOOT, "<../workspace/incl_footer_ws.html") || error("delete file - HTML footer");
my @footer = <FOOT>;
close (FOOT);

print <<"footer END";
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  @footer
</div>
</body>
</html>
footer END
####################################################################
####################################################################

####################################################################
sub error {
    print "An error occured, please contact the <a href=\"mailto:friendly\@joyofcode.com\">webmaster</a> with the following message:<br>\n";
    print "\"Cannot $_[0]\"";
    die;
}
####################################################################