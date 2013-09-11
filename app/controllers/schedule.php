<?php
/*-----------------------------------------------------------
Schedule
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modified: September 8, 2013

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

// get current progress and persist
$progressObj             = new Progress();
$progress                = $progressObj->getProgress(USER_ID);
$authNamespace->progress = $progress;
