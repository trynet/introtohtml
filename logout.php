<?php
require_once 'app/config/config.php';

$userObj = new User();
$userObj->logout(USER_ID);

$auth = Zend_Auth::getInstance();
$auth->clearIdentity();

Zend_Session::destroy();
header('Location: index.php');
