<?php
/*-----------------------------------------------------------
Configuration file
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013
------------------------------------------------------------*/
error_reporting(E_ALL);
ini_set('display_errors', 1);

// tables
define('TBL_USER', 'user');
define('TBL_APPENDIX', 'appendix');
define('TBL_LAB', 'lab');
define('TBL_LESSON', 'lesson');
define('TBL_PROGRESS', 'progress');

define('PATH', '/home1/joyofcod');
define('APPLICATION_PATH', PATH . '/public_html/_dev_intro/app');

set_include_path(get_include_path() . PATH_SEPARATOR . PATH .
                     PATH_SEPARATOR . APPLICATION_PATH);

require_once 'Zend/Db/Adapter/Pdo/Mysql.php';
require_once 'Zend/Db.php';
require_once 'Zend/Db/Table.php';
require_once 'Zend/Auth/Adapter/Interface.php';
require_once 'Zend/Auth.php';
require_once 'Zend/Session/Namespace.php';
require_once 'Zend/Log.php';
require_once 'Zend/Registry.php';
require_once 'classes/AuthAdapter.php';
require_once 'classes/DbLogger.php';
require_once 'classes/User.php';
require_once 'classes/Progress.php';

// database
$db = Zend_db::factory('Pdo_Mysql', array(
   'host'     => 'localhost',
   'username' => 'joyofcod',
   'password' => 'Bk050553@',
   'dbname'   => 'joyofcod_introtohtml'
));
Zend_Db_Table::setDefaultAdapter($db);

// logger
$logger = Zend_Log::factory(array(
   'timestampFormat' =>'Y-m-d H:i:s',
   array(
      'writerName'      => 'Stream',
      'writerParams' => array('stream' => APPLICATION_PATH . '/logs/zend.log')
   ),
   array(
      'writerName'  => 'Firebug',
      'filterName'  => 'Priority',
      'filterParms' => array('priority' => Zend_Log::INFO)
   )
));
Zend_Registry::set('logger', $logger);

// authentication / authorization
$authNamespace = new Zend_Session_Namespace('Zend_Auth');

if (!$authNamespace->logged_in && $_SERVER['SCRIPT_NAME'] != '/login.process.php')
   header('Location: login.php');
   
