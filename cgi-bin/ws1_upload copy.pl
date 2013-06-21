#!/usr/bin/perl -w
# author: Barbara Hartmann
# contact: barbara@apartment1.net
# last edited: 5/13/05
use strict;
use CGI;
#print "Content-type:text/html\n\n";
require 'ws1_library.pl';

####################################################################
####################################################################
# limit upload - change file sizes here
use constant MAX_FILE_SIZE  => 153600;       # Constant to limit each upload to 153,600 bytes = 150kB
my $maxFileSize = "150 kB";                  # Variable to print the Oops message
use constant MAX_DIR_SIZE   => 1048576;      # Constant to limit total uploads to 5,242,880 bytes = 5MB
my $maxDirSize = "5 MB";                     # Variable to print the Oops message
my $sendEmail = "yes";                       # Variable weather or not to send email on upload
####################################################################
####################################################################

$CGI::DISABLE_UPLOADS = 0;                   # Enable Upload

my $q = new CGI;

####################################################################
# get UserID
my $TloginName = $q -> param('loginName');
my $loginName;
if ($TloginName =~ /^([\w\-]+)$/) {
     $loginName = $1;
}

####################################################################
# get the uploadFile (the file itself)
my $uploadFile = $q -> upload('uploadFile');

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

####################################################################
# directories
my $backFile = "../workspace/index.html";
my $mainDir = "../workspace/" . $loginName;

####################################################################
# check if no file was choosen
unless ($uploadFile) {
     print "Content-type:text/html\n\n";
     printHTMLHeader();
     print "<div class=\"sec\">";
     print "<p><strong>Oops.</strong></p>";
     print "<p>You have not chosen a file to upload.</p>";
     print "<a href=\"$backFile\">Go back</a> and try again.";
     print "</div>";
     printHTMLFooter();
     die;
}

####################################################################
# check if a file name was entered
unless ($fileName) {
     print "Content-type:text/html\n\n";
     printHTMLHeader();
     print "<div class=\"sec\">";
     print "<p><strong>Oops.</strong></p>";
     print "<p>You forgot to type in your file name. For example, if you've chosen to upload a file named index.html you must type in the Upload File box &quot;index.html&quot; (without the quotation marks).</p>";
     print "<a href=\"$backFile\">Go back</a> and try again.";
     print "</div>";
     printHTMLFooter();
     die;
}

####################################################################
# check students workspace size and print message if too big
if ( dir_size() + $ENV{CONTENT_LENGTH} > MAX_DIR_SIZE ) {
     print "Content-type:text/html\n\n";
     printHTMLHeader();
     print "<div class=\"sec\">";
     print "<p><strong>Oops.</strong></p>";
     print "<p>Your workspace seems to be full. We only alow you to upload up to $maxDirSize.</p>";
     print "<a href=\"$backFile\">Go back</a> and delete some files first.";
     print "</div>";
     printHTMLFooter();
     die;
}

####################################################################
# get the directory where we want to upload the file to and
# check for correct file extension, existens of file, and upload file
my $workDir;
####################################################################
if ($requestFile =~ m/images/) {
     $sendEmail = "no";
     if ($requestFile =~ m/Project/) {
       $workDir = $mainDir . "/Project/images/";
     }
     else {
       $workDir = $mainDir . "/images/";
     }
     if ($fileName =~ m/.gif/ || $fileName =~ m/.jpg/ || $fileName =~ m/.jpeg/) {
          if (-e "$workDir$fileName") {
               overwriteForm($workDir);
          }
          uploadFile($workDir);
     }
     else {
          print "Content-type:text/html\n\n";
          printHTMLHeader();
          print "<div class=\"sec\">";
          print "<p><strong>Oops.</strong></p>";
          print "<p>You can only upload a file that ends with a .gif, .jpg, or .jpeg file extension.</p>";
          print "<p><a href=\"$backFile\">Go back</a> and upload a correct file type.</p>";
          print "</div>";
          printHTMLFooter();
          die;
     }
}#elsif ($requestFile =~ m/images/)
####################################################################
else {
       $workDir = $mainDir . "/";
       
        if ($fileName =~ m/.html/ || $fileName =~ m/.htm/) {
             if (-e "$workDir$fileName") {
               overwriteForm($workDir);
             }
             uploadFile($workDir);
        }
        else {
              print "Content-type:text/html\n\n";
              printHTMLHeader();
              print "<div class=\"sec\">";
              print "<p><strong>Oops.</strong></p>";
              print "<p>You can only upload a file that ends with a .html (or .htm) file extension.</p>";
              print "<p><a href=\"$backFile\">Go back</a> and upload a correct file type.</p>";
              print "</div>";
              printHTMLFooter();
              die;
        }
}#else

####################################################################
# Successful upload, redirect to workspace
print "Location: $backFile\n\n";

####################################################################
####################################################################

####################################################################
sub overwriteForm {
     $sendEmail = "no";
     print "Content-type:text/html\n\n";
     printHTMLHeader();
print <<"overwriteForm END";
       <div class="sec">
       <p><strong>Oops.</strong></p>
       <p>The file you want to upload already exists. Do you want to overwrite $fileName?</p>
       <form action="ws1_upload_overwrite.pl" method="post">
         <input type="hidden" name="fileName" value="$fileName" />
         <input type="hidden" name="loginName" value="$loginName" />
         <input type="hidden" name="requestFile" value="$requestFile" />
         <input type="submit" value="Overwrite the File" />
       </form>
       <form action="ws1_upload_notOverwrite.pl" method="post">
         <input type="hidden" name="loginName" value="$loginName" />
         <input type="hidden" name="requestFile" value="$requestFile" />
         <input type="submit" value="Do not overwrite the File" />
       </form>
       </div>
overwriteForm END
     printHTMLFooter();
     $fileName = "tempFile"; # to temporary save the file as "tempFile", has to be after printing the form
     uploadFile($_[0]);
     die;
}
####################################################################

####################################################################
sub uploadFile {
    open (UPLOAD, ">$_[0]$fileName") || error("upload file $fileName.");
    my ($data, $length, $chunk);
    while ($chunk = read($uploadFile, $data, 1024)) {
          print UPLOAD $data;
          $length += $chunk;
          if ($length > MAX_FILE_SIZE) {
             close (UPLOAD);
             unlink ("$_[0]$fileName") || error ("upload file - file too big");

             print "Content-type:text/html\n\n";
             printHTMLHeader();
             print "<div class=\"sec\">";
             print "<p><strong>Oops.</strong></p>";
             print "<p>The file you want to upload is too big. We allow you to upload up to $maxFileSize files.</p>\n";
             print "<p><a href=\"$backFile\">Go back</a> and choose a smaller one</p>";
             print "</div>";
             printHTMLFooter();
             die;
          }
    }
    close (UPLOAD);
    ###########################################################################
    ## email Bud about upload
    ###########################################################################
    if ($sendEmail eq "yes") {
         sendmailUpload($loginName, $fileName, $workDir);
    }
}
####################################################################

####################################################################
sub dir_size {
    my @checkDir;
    $checkDir[0] = $mainDir;
    $checkDir[1] = $mainDir . "/styles";
    $checkDir[2] = $mainDir . "/images";
    my $dirSize = 0;
    foreach (@checkDir) {
              my $dir = $_;
              opendir (DIR, "$dir") || error ("upload file - dir size");
              my @dirFiles = readdir (DIR);
              closedir (DIR);
              foreach (@dirFiles) {
                      my @stats= stat("$dir/$_");
                      $dirSize += $stats[7];
              }
    }
    $dirSize -= 9216; # subtract 9216 bytes for the folders
    return $dirSize;
}
####################################################################

####################################################################
sub printHTMLHeader {
     open (HEAD1, "<../workspace/incl_header1_ws.html") || error("upload file - HTML header 1");
     my @header1 = <HEAD1>;
     close (HEAD1);
     open (HEAD2, "<../workspace/incl_header2_ws.html") || error("upload file - HTML header 2");
     my @header2 = <HEAD2>;
     close (HEAD2);
print <<"header END";
        <?xml version="1.0" encoding="iso-8859-1"?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <title>Work Space</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="../ws1/styles/chapters.css" />
        </head>
        <body bgcolor="#FFFFFF" text="#000000">
header END
     print "@header1\n";
     print "<img src=\"../ws1/images/workspace.gif\" alt=\"Work Space\" width=\"590\" height=\"28\" />";
     print "@header2\n";
}
####################################################################

####################################################################
sub printHTMLFooter {
     open (FOOT, "<../workspace/incl_footer_ws.html") || error("upload file - HTML footer");
     my @footer = <FOOT>;
     close (FOOT);
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
}
####################################################################

####################################################################
sub error {
    print "Content-type:txt/html\n\n";
    print "<br>An error occured, please contact the <a href=\"bud\@joyofcode.com\">webmaster</a> with the following message:<br>\n";
    print "\"Cannot $_[0]\"";
    die;
}
####################################################################