<?php
/*-----------------------------------------------------------
Configuration file
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 15, 2013
------------------------------------------------------------*/
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

// admin email
define('EMAIL_ADMIN', 'service@lucidmediaconcepts.com');
define('EMAIL_INSTRUCTOR', 'service@lucidmediaconcepts.com');

// program fee
define('PROGRAM_FEE', 225.00);

// usertypes
define('USER_STANDARD', 2);
define('USER_DISCOUNT', 3);
define('USER_FREE', 4);
define('USER_FIT', 5);

// tables
define('TBL_USER', 'user');
define('TBL_APPENDIX', 'appendix');
define('TBL_LAB', 'lab');
define('TBL_LESSON', 'lesson');
define('TBL_PROGRESS', 'progress');

// paths
define('PATH', '/home1/joyofcod');
define('APPLICATION_PATH', PATH . '/public_html/_dev_intro/app');
define('UPLOAD_DIR', APPLICATION_PATH . '/../workspace');

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
require_once 'classes/Lesson.php';
require_once 'classes/Lab.php';
require_once 'classes/Appendix.php';
require_once 'classes/Registration.php';
require_once 'classes/PromoCode.php';
require_once 'classes/Workspace.php';

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
$user_id = $authNamespace->storage['user_id'];
define('USER_ID', $user_id);
define('USERTYPE', $authNamespace->storage['usertype']);

//echo '<pre>'; print_r($_SESSION); echo '</pre>';
//echo '<pre>'; print_r($_REQUEST); echo '</pre>';
//echo '<pre>'; print_r($_SERVER); echo '</pre>';

if (!$authNamespace->logged_in && $_SERVER['SCRIPT_NAME'] != '/login.process.php')
   header('Location: login.php');
