<?php

require_once '../config/config.php';

// get $_POST variables
$subscribe = htmlspecialchars($_POST['subscribe']);
$html      = htmlspecialchars($_POST['html']);
$css       = htmlspecialchars($_POST['css']);
$wordpress = htmlspecialchars($_POST['wordpress']);

// get $_GET variable (for progession wait or proceed)
// dont think this variable is set in $_GET. Obtain
// from session instead
$proceed = htmlspecialchars($_GET['proceed']);
$authNamespace = new Zend_Session_Namespace('Zend_Auth');
$proceed = $authNamespace->progress['proceed'];

$data = array('subscribe' => $subscribe,
              'html'      => $html,
              'css'       => $css,
              'wordpress' => $wordpress);

// save to db
$subscriptionObj = new Subscription();
$subscriptionObj->updateSubscription(USER_ID, $data);

// have to send instructor email here so access to subscription
// data is present (as opposed to app/index.php, which is where
// I'd like it to be
switch ($proceed) {
   case PROCEED_WAIT :
      $instructor_message_id = UPLOAD_LAB1_REVIEW_INSTRUCTOR;
   break;

   case PROCEED_CONTINUE :
   default :
      $instructor_message_id = UPLOAD_LAB1_NO_REVIEW_INSTRUCTOR;
   break;
}
$autoResponseObj = new AutoResponse();
$params = array('instructor' => true);
$autoResponseObj->generateMessage($instructor_message_id, $user_id, $params);


// redirect
header("Location: /app/controllers/progress.php?proceed=$proceed");
