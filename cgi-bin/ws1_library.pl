####################################################################
# author: Barbara Hartmann
# contact: barbara@apartment1.net
# last edited: 05/13/05
####################################################################

use File::Copy;

####################################################################
# change file paths here
# AND DOWN BELOW FOR THE WORKSPACE
my $txtPath = "/home2/joyofcod/www/intro/data/schedules/";
my $datFilename = "/home2/joyofcod/www/intro/data/studentData.dat";
my $chapterFilename = "/home2/joyofcod/www/intro/includes/intro_chaptersNames.txt";
my $labFilename = "/home2/joyofcod/www/intro/includes/intro_labNames.txt";
my $appendixFilename = "/home2/joyofcod/www/intro/includes/intro_appendixNames.txt";
####################################################################

####################################################################
# get the UserID
sub getUserID {
    my ($TloginName) = $ENV{REMOTE_USER} =~ /^([\w\-\.\@]+)$/;
    $TloginName =~ s/@/_/g;
    $TloginName =~ s/\./_/g;
    my $loginName;
    if ($TloginName =~ /^([\w\-]+)$/) {
         $loginName = $1;
    }
    return $loginName;
}


####################################################################
# get todays date and format it mm/dd/yyyy
sub getTodaysDate {
    ($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst) = localtime;
    my @month = ("01","02","03","04","05","06","07","08","09","10","11","12");
    $year -= 100;
    my $todaysDate = $month[$mon] . '/' . sprintf ('%02d',$mday) . '/' . sprintf ('%02d',$year);
    return $todaysDate;
}

####################################################################
sub getFirstName {
   ####################################################################
   # read the .dat file into an array
   open (DATDATA, "<$datFilename") || error("read user information");
   flock (DATDATA, 2);
   my @datData = <DATDATA>;
   close (DATDATA);
   # format the array and find the right person
   foreach my $datData(@datData) {
            # break each array item into an individual array (break point is ", ")
            $datData =~ s/"//g;
            @studentData = split (/, /,$datData);
            # when the item equals the LogInName end the loop
            if ($studentData[0] eq $_[0]) {
                 last;
            }
   }
   return $studentData[2];
}

####################################################################
sub getLastName {
   ####################################################################
   # read the .dat file into an array
   open (DATDATA, "<$datFilename") || error("read user information");
   flock (DATDATA, 2);
   my @datData = <DATDATA>;
   close (DATDATA);
   # format the array and find the right person
   foreach my $datData(@datData) {
            # break each array item into an individual array (break point is ", ")
            $datData =~ s/"//g;
            @studentData = split (/, /,$datData);
            # when the item equals the LogInName end the loop
            if ($studentData[0] eq $_[0]) {
                 last;
            }
   }
   return $studentData[3];
}

####################################################################
sub getCurrentWeek {
  if ($_[0] eq 'bud') {
       my $currentWeek = 12;
       return $currentWeek;
  }
  else {
      my $currentWeek;
      my $today = getTodaysDate();
      ####################################################################
      # read the .txt file into an array
      my @studentData = readTXT($_[0]);
      ####################################################################
      # if no txt file with that name exists get data from the dat file (first Login)
#print 'sd: ' . $studentData[0];
      unless ($studentData[0] eq $_[0]) {
      #if (! $studentData[0]) {
               ####################################################################
               # read the .dat file into an array
               open (DATDATA, "<$datFilename") || error("read user information");
               flock (DATDATA, 2);
               my @datData = <DATDATA>;
               close (DATDATA);
               # format the array and find the right person
               foreach my $datData(@datData) {
                        # break each array item into an individual array (break point is ", ")
                        $datData =~ s/"//g;
                        @studentData = split (/, /,$datData);
                        # when the item equals the LogInName end the loop
                        if ($studentData[0] eq $_[0]) {
                             last;
                        }
               }
               if ($studentData[0] ne $_[0]) {
                    print "Content-type:text/html\n\n";
                    print "You are not in our system! Please enroll<br><br>";
                    die;
               }
      }# unless ($studentData[0] eq $_[0])
      ####################################################################
      # if we have a startDate in the txt file (every day login):
      # calculate the CurrentWeek
      if ($studentData[12]) {
             $currentWeek = currentWeek(@studentData);
             return $currentWeek;
      }
      ####################################################################
      # if we don't have anything (very first time only):
      # calculate schedule, put data in .txt file, and create workspace folder
      else {
          ####################################################################
          # calculate the schedule
          my $week2 = addDays(7, $today);
          my $week3 = addDays(7, $week2);
          my $week4 = addDays(7, $week3);
          my $week5 = addDays(7, $week4);
          my $week6 = addDays(7, $week5);
          my $week7 = addDays(7, $week6);
          my $week8 = addDays(7, $week7);
          my $week9 = addDays(7, $week8);
          my $week10 = addDays(7, $week9);
          my $week11 = addDays(7, $week10);
          my $week12 = addDays(7, $week11);
          ####################################################################
          # delete whitespace, tab, newline etc at the end of the last item in @studentData which is the tos
          my $tos = $studentData[9];
          $tos =~s/\s+$//g;
          $currentWeek = 1;
          ####################################################################
          # save data to UserID.txt file
          #my $txtWriteFile = $txtPath . $_[0] . ".txt";
          #my $writeToTXT;
          #$writeToTXT = $studentData[0] . ', ' . $studentData[1] . ', ' . $studentData[2] . ', ' . $studentData[3] . ', ' . $studentData[4] . ', ' . $studentData[5] . ', ' . $studentData[6] . ', ' . $studentData[7] . ', ' . $studentData[8] . ', ' . $tos . ', ' . $today . ', ' . $week2 . ', ' . $week3 . ', ' . $week4 . ', ' . $week5 . ', ' . $week6 . ', ' . $week7 . ', ' . $week8 . ', ' . $week9 . ', ' . $week10 . ', ' . $week11 . ', ' . $week12;
          #open (TXTDATAWRITE, ">$txtWriteFile") || error("save user data");
          #flock (TXTDATAWRITE, 2);
          #print TXTDATAWRITE "$writeToTXT";
          #close (TXTDATAWRITE);
          ####################################################################
          # email notification to Bud about first login
          my $to = "webmaster\@joyofcode.com";
          my $from = "webmaster\@joyofcode.com";
          my $subject = "New student's first log in";
          my $body = "A new student started the Joy Of Code workshop today: \n\n";
          $body .= "Name: $studentData[2] $studentData[3]\n";
          $body .= "Phone: $studentData[4]\n";
          $body .= "Email: $studentData[5]\n";
          $body .= "Start of workshop: $today\n";
          $body .= "week 2: $week2\n";
          $body .= "week 3: $week3\n";
          $body .= "week 4: $week4\n";
          $body .= "week 5: $week5\n";
          $body .= "week 6: $week6\n";
          $body .= "week 7: $week7\n";
          $body .= "week 8: $week8\n";
          $body .= "week 9: $week9\n";
          $body .= "week 10: $week10\n";

          open (MAIL, "|/usr/lib/sendmail -t")  || die &error ("Sendmail error : $!");
          print MAIL "To: $to \nFrom: $from\n";
          print MAIL "Subject: $subject\n\n";
          print MAIL "$body\n";
          print MAIL "\n";
          close (MAIL);

          ####################################################################
          # create the new folder for workspace
          if ($_[0] =~ /^([\w \-]+)$/) {
               my $dirName = "../workspace/" . $_[0];
               mkdir ("$dirName", 0777);
               my $dirImgName = "../workspace/" . $_[0] . "/images";
               mkdir ("$dirImgName", 0777);

               # copy files from ws1/images/lab/ to [student]/images/
               # my $originalImageDir = '../ws1/images/lab/';
               # copy ($originalImageDir . 'catalogue.gif', $dirImgName . '/catalogue.gif');
               # copy ($originalImageDir . 'catalogue_button.gif', $dirImgName . '/catalogue_button.gif');
               # copy ($originalImageDir . 'ccc.gif', $dirImgName . '/ccc.gif');
               # copy ($originalImageDir . 'cooling_cookies.jpg', $dirImgName . '/cooling_cookies.jpg');
               # copy ($originalImageDir . 'db.gif', $dirImgName . '/db.gif');
               # copy ($originalImageDir . 'deep_chocolate_mousse_brown.jpg', $dirImgName . '/deep_chocolate_mousse_brown.jpg');
               # copy ($originalImageDir . 'home.gif', $dirImgName . '/home.gif');
               # copy ($originalImageDir . 'home_button.gif', $dirImgName . '/home_button.gif');
               # copy ($originalImageDir . 'ingredients.gif', $dirImgName . '/ingredients.gif');
               # copy ($originalImageDir . 'logo.gif', $dirImgName . '/logo.gif');
               # copy ($originalImageDir . 'pointer.gif', $dirImgName . '/pointer.gif');
               # copy ($originalImageDir . 'recipes.gif', $dirImgName . '/recipes.gif');
               # copy ($originalImageDir . 'recipes_button.gif', $dirImgName . '/recipes_button.gif');
               # copy ($originalImageDir . 'shortbread_fingers.jpg', $dirImgName . '/shortbread_fingers.jpg');
          }
          return $currentWeek;
     }# else
  }# else
}
####################################################################

####################################################################
# import data to get the schedule w/ input $loginName
sub readTXT {
             my $txtFilename = $txtPath . $_[0] . ".txt";
             open (DATES, "<$txtFilename");
             flock (DATES, 2);
             my @studentInfo = split /, /, <DATES>;
             close (DATES);
             return @studentInfo;
}
####################################################################

####################################################################
# import chapter names
sub readChapterNames {
             open (CHAPTER, "<$chapterFilename") || error("read chapters");
             flock (CHAPTER, 2);
             my @chapterNames = <CHAPTER>;
             close (CHAPTER);
             return @chapterNames;
}
####################################################################
# import lab names
sub readLabNames {
             open (LAB, "<$labFilename") || error("read labs");
             flock (LAB, 2);
             my @labNames = <LAB>;
             close (LAB);
             return @labNames;
}
####################################################################
# import appendix names
sub readAppendixNames {
             open (APPEND, "<$appendixFilename") || error("read appendix");
             flock (APPEND, 2);
             my @appNames = <APPEND>;
             close (APPEND);
             return @appNames;
}
####################################################################

####################################################################
# add x days(NEVER more than 28!!!) to the input date with (input/output as mm/dd/yyyy)
# input of 'no of days'=$_[0] and 'date'=$_[1]
sub addDays {
    my @date = dateToArray($_[1]);
    my $NEWmon = $date[0];
    my $NEWmday = $date[1] + $_[0];
    my $NEWyear = $date[2];
    my $EOM = endOfMonth(@date);

    if ($NEWmday > $EOM) {
         $NEWmday -= $EOM;
         $NEWmon ++;
         if ($NEWmon == 12){
              $NEWmon = 0;
              $NEWyear ++;
         }
     }
     dateToScalar($NEWmon, $NEWmday, $NEWyear);
}
####################################################################

####################################################################
# check in which week we are with
# input of array @studentData
sub currentWeek {
    my $week;
    if (isAfterToday($_[10])) {
        $week = 1;
    }
    if (isAfterToday($_[11])) {
        $week = 1;
    }
    elsif (isAfterToday($_[12])) {
        $week = 2;
    }
    elsif (isAfterToday($_[13])) {
        $week = 3;
    }
    elsif (isAfterToday($_[14])) {
        $week = 4;
    }
    elsif (isAfterToday($_[15])) {
        $week = 5;
    }
    elsif (isAfterToday($_[16])) {
        $week = 6;
    }
    elsif (isAfterToday($_[17])) {
        $week = 7;
    }
    elsif (isAfterToday($_[18])) {
        $week = 8;
    }
    elsif (isAfterToday($_[19])) {
        $week = 9;
    }
    elsif (isAfterToday($_[20])) {
        $week = 10;
    }
    elsif (isAfterToday($_[21])) {
        $week = 11;
    }
    else {
        $week = 12;
    }
    return $week;
}
####################################################################

####################################################################
# sendmail for file upload in the workspace
# input of loginName, fileName, workDirectory
sub sendmailUpload {
    my $domainname = 'http://www.introtohtml.net';
    my $today = getTodaysDate();
    
    open (DATDATA, "<$datFilename") || error("read user information");
    flock (DATDATA, 2);
    my @datData = <DATDATA>;
    close (DATDATA);
    # format the array and find the right person
    foreach my $datData(@datData) {
            # break each array item into an individual array (break point is ", ")
            $datData =~ s/"//g;
            @studentData = split (/, /,$datData);
            # when the item equals the LogInName end the loop
            if ($studentData[0] eq $_[0]) {
                 last;
            }
    }
    
    #my $firstName = getFirstName();
    #my $lastName = getLastName();

    my $to = "webmaster\@joyofcode.com";
    my $from = "webmaster\@joyofcode.com";
    my $subject = "$studentData[2] $studentData[3] has uploaded To JOC";
    my $body = "$studentData[2] $studentData[3]has uploaded the following file on $today: \n\n";
    my $urlfolder = substr $_[2], 2;
    my $url = $domainname . $urlfolder . $_[1];
    $body .= "File Name: $_[1]\n";
    $body .= "Folder Name: " . $url . "\n";

    open (MAIL, "|/usr/lib/sendmail -t")  || die &error ("Sendmail error : $!");
    print MAIL "To: $to \nFrom: $from\n";
    print MAIL "Subject: $subject\n\n";
    print MAIL "$body\n";
    print MAIL "\n";
    close (MAIL);
}
####################################################################


####################################################################
# format the date as mm/dd/yy with
# input of an array (mm, dd, yy)
sub dateToScalar {
    my @month = ("01","02","03","04","05","06","07","08","09","10","11","12");
    $month[$_[0]] . '/' . sprintf ('%02d',$_[1]) . '/' . sprintf ('%02d',$_[2]);
}
####################################################################

####################################################################
# format the date as an array (mm, dd, yy) with
# input of a scalar mm/dd/yy
sub dateToArray {
    my @tempArray = split (/\//, $_[0]);
    $tempArray[0]--; #month output now as 0-11 the way perl works
    ($tempArray[0], $tempArray[1], $tempArray[2]);
}
####################################################################

####################################################################
# check if day is after today with
# input day as scalar mm/dd/yyyy
sub isAfterToday {
    my @date = dateToArray($_[0]);
    if ($date[2] > $year) {
        return 1;
    }
    elsif ($date[0] > $mon && $date[2] >= $year) {
        return 1;
    }
    elsif ($date[0] == $mon && $date[1] > $mday && $date[2] >= $year) {
        return 1;
    }
    else {
        return 0;
    }
}
####################################################################

####################################################################
# determine end of month day (28, 29, 30, or 31) with
# input of an array (mm, dd, yyyy)
sub endOfMonth {
    my $EOMyear = $_[2] + 2000;
    if ($_[0] == 1) {
         if (&checkLeapYear($EOMyear)) {
            return 29;
         }
         else {
              return 28;
         }
    }
    elsif ($_[0] == 3 || $_[0] == 5 || $_[0] == 8 || $_[0] == 10) {
            return 30;
    }
    else {
          return 31;
    }
}
####################################################################

####################################################################
# check if year is a leap year with input year
sub checkLeapYear {
        if ($_[0] % 4 == 0) {
                if ($_[0] % 100 != 0) {
                        return 1;
                        }
                if ($_[0] % 400 == 0) {
                        return 1;
                }
                else {
                      return 0;
                }
        }
        else {
              return 0;
        }
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


1;
