#!/usr/bin/perl -wT
# author: Barbara Hartmann
# contact: barbara@apartment1.net
# last edited: 8/16/04
use strict;
use CGI ':standard';

my $loginName = getUserID();
my ($requestFile) = $ENV{DOCUMENT_NAME} =~ /^([\w\.\-]+)$/;

####################################################################
# get the current directories
my $mainDir = "../workspace/" . $loginName;
my $workDir;
my $dir;

if ($requestFile =~ m/images/) {
   $workDir = $mainDir . "/images/";
   $dir = $loginName . "/images/";
}
else {
    $workDir = $mainDir . "/";
    $dir = $loginName . "/";
}



print "Content-type:text/html\n\n";

####################################################################
####################################################################
# print form to upload files
print <<"upload1 END";
<form action="../cgi-bin/ws1_upload.pl" method="post" enctype="multipart/form-data">
   <p><strong>Step 1</strong> Locate your file from your computer that you want to upload to your Work Space.</p>

   <input type="file" name="uploadFile"  style="float:none;"  />

   <p><strong>Step 2</strong> Type in the filename that you are going to upload.
   This should be the same filename as you've just chosen to upload.
upload1 END
if ($requestFile =~ m/images/) {
      print "For example, logo.gif.";
}
else {
      print "For example, index.html.";
}
print <<"upload2 END";
   </p>

      <input type="text" name="fileName" / style="float:none;">
      <input type="hidden" name="loginName" value="$loginName" />
      <input type="hidden" name="requestFile" value="$requestFile" />
      <input type="submit" value="Upload File"  style="float:none;"/>

</form>
upload2 END
####################################################################

####################################################################
####################################################################
# display the html files in the students workspace directory
if ($loginName =~ /^([\w\-]+)$/) {
     opendir (WORKDIR, "$workDir") || error("display workspace files $workDir");
     my @files = readdir (WORKDIR);
     closedir (WORKDIR);

     if (@files) {
####################################################################
# table header
          print "<table width=\"80%\"  border=\"0\" cellspacing=\"0\" cellpadding=\"5\" align=\"center\">\n";
          print "<tr valign=\"top\" class=\"grayhead\">\n";
          if ($requestFile =~ m/index/) {
            print "<th class=\"cellbottom\">Delete</th>\n";
          }
          print "<th colspan=\"2\" class=\"cellbottom\">Location of Files and Folders:<br />\n";
          if ($requestFile =~ m/images/) {
              print "You Are In The Images Folder</th>\n";
          }
          else {
              print "You Are In The Root Folder</th>\n";
          }
          print "<th class=\"cellbottom\">File Size</th>\n";
          print "<th class=\"cellbottom\">Date Uploaded</th>\n";
          print "</tr>\n";
####################################################################
# folder navigation
          print "<tr valign=\"top\">\n";
          if ($requestFile =~ m/index/) {
              print "<td align=\"right\">&nbsp;</td>\n";
          }
          print "<td align=\"right\"><img src=\"../images/dir.gif\" width=\"22\" height=\"22\" alt=\"\" border=\"0\" /></td>\n";
          if ($requestFile =~ m/images/) {
              print "<td><a href=\"index.html\">Back To The Root Folder</a></td>\n";
              print "<td colspan=\"2\">&nbsp;</td>\n";
          }
          unless ($requestFile =~ m/images/) {
              print "<td colspan=\"3\"><a href=\"images.html\">images</a></td>\n";
              print "</tr>\n";
          }
          print "</tr>\n";
####################################################################
# files
          foreach (@files) {
                  if ($_ =~ /^\w/ && $_ =~ /\./) {
                      my @stats= stat("$workDir$_");
                      my @time = localtime $stats[9];
                      my @month = ("01","02","03","04","05","06","07","08","09","10","11","12");
                      $time[5] += 1900;
                      my $date = $month[$time[4]] . '/' . $time[3] . '/' . $time[5];
                      my $size;
                      if ($stats[7] < 512) {
                           $size = sprintf ('%1.2f', $stats[7] / 1024);
                      }
                      else {
                            $size = sprintf ('%1.0f', $stats[7] / 1024);
                      }
                      print "<tr valign=\"top\">\n";
                      if ($requestFile =~ m/index/) {
                        print "<td align=\"center\"><form action=\"../../cgi-bin/ws1_delete_confirm.pl\" method=\"post\"><input type=\"hidden\" name =\"file\" value=\"$_\" /><input type=\"hidden\" name=\"loginName\" value=\"$loginName\" /><input type=\"hidden\" name=\"requestFile\" value=\"$requestFile\" /><input type=\"image\" src=\"../images/delete.gif\" /></form></td>\n";
                      }
                      print "<td align=\"right\">&nbsp;</td>\n";
                      print "<td><a href=\"$dir$_\" target=\"_blank\">$_</a></td>\n";
                      print "<td>$size KB</td>\n";
                      print "<td>$date</td>\n";
                      print "</tr>\n";
                  }#if
          }#foreach
          print "</table>\n";
####################################################################
     } #if (@files)
}#if ($loginName =~ /^([\w\-]+)$/)



####################################################################
sub getUserID {
    my ($TuserID) = $ENV{REMOTE_USER} =~ /^([\w\-\.\@]+)$/;
    $TuserID =~ s/@/_/g;
    $TuserID =~ s/\./_/g;
    my $userID;
    if ($TuserID =~ /^([\w\-]+)$/) {
         $userID = $1;
    }
    return $userID;
}
####################################################################

####################################################################
sub error {
    print "An error occured, please contact the <a href=\"mailto:friendly\@joyofcode.com\">webmaster</a> with the following message:<br>\n";
    print "\"Cannot $_[0]\"";
    die;
}
####################################################################