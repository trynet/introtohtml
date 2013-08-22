<?php
// The following section is for when the instructor selects the
// link from within an email, indicating that the files have
// been reviewed and that the student is set to continue
$user_id = htmlspecialchars($_GET['user_id']);
$instructor_proceed = htmlspecialchars($_GET['instructor_proceed']);

if (is_numeric($user_id) && $instructor_proceed) {
   mysql_connect('localhost', 'joyofcod', 'Bk050553@');
   mysql_select_db('joyofcod_introtohtml');

   $query = "SELECT * FROM progress WHERE user_id = $user_id";
   $result = mysql_query($query);

   $row = mysql_fetch_array($result);
   $proceed = $row['proceed'] + 1;

   $query = "UPDATE progress SET proceed = $proceed WHERE user_id = $user_id";
   mysql_query($query);

   if (!mysql_errno())
      $message = "Student set to proceed";
   else
      $message = "An error occurred setting student to proceed";

   exit($message); // we're not actually in the app, so display message
                   // and exit;
}
