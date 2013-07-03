<?php
/*-----------------------------------------------------------
Schedule
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modified: July 3, 2013
------------------------------------------------------------*/

$progressObj = new Progress();
$lessonObj   = new Lesson();
$labObj      = new Lab();
$appendixObj = new Appendix();

$lessons    = $lessonObj->getLessons();
$labs       = $labObj->getLabs();
$appendices = $appendixObj->getAppendices();

/*
echo '<pre>'; print_r($_SESSION);
echo 'user_id: ' . $user_id;
*/
