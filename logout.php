<?php
require_once 'app/config/config.php';

$auth = Zend_Auth::getInstance();
$auth->clearIdentity();

Zend_Session::destroy();
header('Location: index.php');
