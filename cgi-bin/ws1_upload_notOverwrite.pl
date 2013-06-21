#!/usr/bin/perl -wT
# author: Barbara Hartmann
# contact: barbara@apartment1.net
# last edited: 1/29/04
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
# get requestFile
my $TrequestFile = $q -> param('requestFile');
my $requestFile;
if ($TrequestFile =~ /^([\w\.\-]+)$/) {
     $requestFile = $1;
}
my $backFile = "../workspace/index.html";
my $mainDir = "../workspace/" . $loginName;

####################################################################
# get the current directory
my $workDir;
if ($requestFile =~ m/images/) {
   $workDir = $mainDir . "/images/";
}
else {
    $workDir = $mainDir . "/";
}

####################################################################
# delete the tempFile
my $temp = $workDir . "tempFile";
unlink ("$temp");

####################################################################
# redirect to workspace
print "Location: $backFile\n\n";
