<?php
/*-----------------------------------------------------------
Configuration file
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: August 17, 2013
------------------------------------------------------------*/
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

// application domain
define('APPLICATION_DOMAIN', 'http://dev.introtohtml.net');
define('JOC_DOMAIN', 'http://www.joyofcode.com/new');

// email addresses
define('EMAIL_ADMIN', 'webmaster@joyofcode.com');
define('EMAIL_INSTRUCTOR', 'service@lucidmediaconcepts.com');
//define('EMAIL_INSTRUCTOR', 'bud@joyofcode.com');

// promotional codes
define('PROMO_NONE',     '');
define('PROMO_EFA',      'efa');
define('PROMO_GAG',      'gag');
define('PROMO_REDUCED',  'reduced');
define('PROMO_ADULTED',  'adulted');
define('PROMO_FIT',      'fit');
define('PROMO_CLASSROOM', 'classroom');

// progressions
define('PROGRESSION_INCREMENT', 1);
define('PROGRESSION_1', 1);
define('PROGRESSION_2', 2);
define('PROGRESSION_3', 3);
define('PROGRESSION_4', 4);
define('PROGRESSION_5', 5);
define('PROGRESSION_6', 6);
define('PROGRESSION_7', 7);
define('PROGRESSION_8', 8);
define('PROGRESSION_9', 9);
define('PROGRESSION_10', 10);

// proceed or wait
define('PROCEED_CONTINUE', 1);
define('PROCEED_WAIT',     0);

// application_states
define('INITIAL_STATE',   0);
define('SECONDARY_STATE', 1);
define('TERTIARY_STATE',  2);

// messages
define('MESSAGE_PATH', 'includes/messages');
define('FIRST_LOGIN_UG1',               1);
define('FIRST_LOGIN_UG2',               2);
define('FIRST_LOGIN_UG3',               3);
define('FIRST_LOGIN_UG4',               4);
define('FIRST_LOGIN_UG5',               5);
define('POST_P1_NO_REVIEW_UG1',         6);
define('POST_P1_NO_REVIEW_UG2',         7);
define('POST_P1_NO_REVIEW_UG3',         8);
define('POST_P1_REVIEW_UG1',            9);
define('POST_P1_REVIEW_UG2',           10);
define('POST_P1_REVIEW_UG3',           11);
define('POST_P2_NO_REVIEW',            12);
define('POST_P2_NO_REVIEW_UG3',        13);
define('POST_P2_REVIEW_NO_PAYPAL_UG1', 14);
define('POST_P2_REVIEW_NO_PAYPAL_UG2', 15);
define('POST_P2_REVIEW_NO_PAYPAL_UG3', 16);
define('POST_P2_REVIEW_PAYPAL',        17);
define('POST_P8',                      18);
define('DEFAULT_MESSAGE',              19);

// auto-responses
define('AUTO_RESPONSE_PATH', 'includes/auto_response');
define('REGISTER_NO_PROMO',                 1);
define('REGISTER_PROMO_EFA',                2);
define('REGISTER_PROMO_GAG',                3);
define('REGISTER_PROMO',                    4);
define('REGISTER_PROMO_REDUCED',            5);
define('REGISTER_PROMO_ADULTED',            6);
define('REGISTER_PROMO_FIT',                7);
define('REGISTER_INSTRUCTOR',               8);
define('REGISTER_CLASSROOM_INSTRUCTOR',     9);
define('UPLOAD_LAB1_NO_REVIEW',            10);
define('UPLOAD_LAB1_REVIEW',               11);
define('UPLOAD_LAB1_NO_REVIEW_INSTRUCTOR',           12);
define('UPLOAD_LAB2_PAYPAL_REVIEW',        13);
define('UPLOAD_LAB2_PAYPAL_NO_REVIEW',     14);
define('UPLOAD_LAB2_NO_PAYPAL_REVIEW',     15);
define('UPLOAD_LAB2_NO_PAYPAL_NO_REVIEW ', 16);
define('UPLOAD_LAB2_NO_REVIEW_INSTRUCTOR',           17);
define('FIT_USER_PAYPAL',                  18);
define('FIT_USER_PAYPAL_INSTRUCTOR',       19);
define('UPLOAD_LAB9_NO_REVIEW_INSTRUCTOR', 20);
define('UPLOAD_LAB9_REVIEW_INSTRUCTOR',    21);
define('UPLOAD_LAB8_NO_REVIEW_INSTRUCTOR', 22);
define('UPLOAD_LAB8_REVIEW_INSTRUCTOR',    23);
define('UPLOAD_LAB7_NO_REVIEW_INSTRUCTOR', 24);
define('UPLOAD_LAB7_REVIEW_INSTRUCTOR',    25);
define('UPLOAD_LAB6_NO_REVIEW_INSTRUCTOR', 26);
define('UPLOAD_LAB6_REVIEW_INSTRUCTOR',    27);
define('UPLOAD_LAB5_NO_REVIEW_INSTRUCTOR', 28);
define('UPLOAD_LAB5_REVIEW_INSTRUCTOR',    29);
define('UPLOAD_LAB4_NO_REVIEW_INSTRUCTOR', 30);
define('UPLOAD_LAB4_REVIEW_INSTRUCTOR',    31);
define('UPLOAD_LAB3_NO_REVIEW_INSTRUCTOR', 32);
define('UPLOAD_LAB3_REVIEW_INSTRUCTOR',    33);
define('UPLOAD_LAB1_REVIEW_INSTRUCTOR', 34);
define('UPLOAD_LAB2_REVIEW_INSTRUCTOR', 35);

// program fee
define('PROGRAM_FEE', 225.00);

// usertypes
define('USER_STANDARD',  2);
define('USER_DISCOUNT',  3);
define('USER_FREE',      4);
define('USER_FIT',       5);
define('USER_CLASSROOM', 6);

// tables
define('TBL_USER',      'user');
define('TBL_APPENDIX',  'appendix');
define('TBL_LAB',       'lab');
define('TBL_LESSON',    'lesson');
define('TBL_PROGRESS',  'progress');
define('TBL_PROMOCODE', 'promocode');
define('TBL_USERTYPE',  'usertype');

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
require_once 'classes/Subscription.php';
require_once 'classes/Registration.php';
require_once 'classes/PromoCode.php';
require_once 'classes/Workspace.php';
require_once 'classes/AutoResponse.php';
require_once 'classes/Application.php';
require_once 'classes/Paypal.php';
require_once 'classes/Message.php';

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
      'writerName'   => 'Stream',
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
$firstname = $authNamespace->storage['firstname'];
$email     = $authNamespace->storage['email'];

// set application state

/* debug */
$DEBUG = array('user_id'            => $authNamespace->storage['user_id'],
               'usertype'           => $authNamespace->storage['usertype'],
               'promotional_code'   => $authNamespace->storage['promo'],
               'progression'        => $authNamespace->progress['progression'],
               'proceed'            => $authNamespace->progress['proceed'],
               'num_files_uploaded' => $authNamespace->num_files_uploaded,
               'message'            => $authNamespace->homepage_message,
               'APPLICATION_STATE'  => $authNamespace->APPLICATION_STATE);

if (!$authNamespace->logged_in && $_SERVER['SCRIPT_NAME'] != '/login.process.php') {
   if (!($_SERVER['SCRIPT_NAME'] == '/app/controllers/paypal.php')) {
      header('Location: ' . JOC_DOMAIN . '/sign-in');
   }
}
