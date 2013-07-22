<?php
require_once 'app/config/config.php';
require_once 'scripts/schedule.php';

$auth = Zend_Auth::getInstance();
$auth->clearIdentity();

Zend_Session::destroy();
header('Location: index.php');
