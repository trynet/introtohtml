<?php
/*-----------------------------------------------------------
Configuration file
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: July 3, 2013
Modifed: July 3, 2013
------------------------------------------------------------*/

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('PATH', '/home1/joyofcod');
define('APPLICATION_PATH', PATH . '/public_html/_dev_intro');

set_include_path(get_include_path() . PATH_SEPARATOR . PATH .
                     PATH_SEPARATOR . APPLICATION_PATH);

require_once 'Zend/Db/Adapter/Pdo/Mysql.php';
require_once 'Zend/Auth/Adapter/Interface.php';
require_once 'Zend/Auth.php';
require_once 'classes/AuthAdapter.php';

// database
$db = Zend_db::factory('Pdo_Mysql', array(
   'host'     => 'localhost',
   'username' => 'joyofcod',
   'password' => 'Bk050553@',
   'dbname'   => 'joyofcod_introtohtml'
));

// logger
$logger = Zend_Log::factory(array(
   'timestampFormat' =>'Y-m-d H:i:s',
   array(
      'writerName'      => 'Stream',
      'writerParams' => array('stream' => '../logs/zend.log')
   ),
   array(
      'writerName'  => 'Firebug',
      'filterName'  => 'Priority',
      'filterParms' => array('priority' => Zend_Log::INFO)
   )
));
Zend_Registry::set('logger', $logger);


if (basename(__FILE__) != 'config.php') {
   // require authentication / authorization
}
