<?php
/*-----------------------------------------------------------
Schedule
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modified: July 3, 2013

Executes at the beginning of each lesson to determine which
ones area are active.
------------------------------------------------------------*/

$progressObj = new Progress();
$lessonObj   = new Lesson();
$labObj      = new Lab();
$appendixObj = new Appendix();

$lessons    = $lessonObj->getLessons();
$labs       = $labObj->getLabs();
$appendices = $appendixObj->getAppendices();


$progress = $authNamespace->progress;
// fixme: this redirect belongs somewhere else
if ($progress['current_lab'] == 3)
   header('Location: /register.php');

echo '<pre>script/schedule.php:' . "\n"; print_r($progress); echo '</pre>';

/*
echo '<pre>'; print_r($_SESSION);
echo 'user_id: ' . $user_id;
*/
