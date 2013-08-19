<?php
/*-----------------------------------------------------------
Application - mainly to consume and adjust application state
Author: Gbenga Ojo <service@lucidmediaconcepts.com>
Origin Date: August 17, 2013
Modifed: August 18, 2013

construct
------------------------------------------------------------*/
require_once 'config/config.php';

class Application
{
   /**
    * construct
    */
   public function __construct() {
   }

   /**
    * consumeApplicationState - determines next applciation state given
    *    the current ont
    *
    * @param: (string) current application state
    * @return: (string) next application state
    */
   public function consumeApplicationState($application_state = null) {
      $authNamespace = new Zend_Session_Namespace('Zend_Auth');

      // get current application state
      if (is_null($application_state))
         $application_state = $authNamespace->APPLICATION_STATE;

      // determine next application state
      switch ($application_state) {
         case INITIAL_STATE :
            $authNamespace->APPLICATION_STATE = SECONDARY_STATE;            
         break;

         case SECONDARY_STATE :
            $authNamespace->APPLICATION_STATE = TERTIARY_STATE;
         break;
      }

      return $authNamespace->APPLICATION_STATE;
   }

   /**
    * setApplicationState - set application to a given state
    *
    * @param: (string) state
    * @return:
    */
   public function setApplicationState($application_state) {
      $authNamespace = new Zend_Session_Namespace('Zend_Auth');
      $authNamespace->APPLICATION_STATE = $application_state;
   }

}




