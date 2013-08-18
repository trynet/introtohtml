<?php

require_once '../config/config.php';

// get $_POST variables
$subscribe = htmlspecialchars($_POST['subscribe']);
$html      = htmlspecialchars($_POST['html']);
$css       = htmlspecialchars($_POST['css']);
$wordpress = htmlspecialchars($_POST['wordpress']);

// get $_GET variable (for progession wait or proceed)
$proceed = htmlspecialchars($_GET['proceed']);

$data = array('subscribe' => $subscribe,
              'html'      => $html,
              'css'       => $css,
              'wordpress' => $wordpress);

// save to db
$subscriptionObj = new Subscription();
$subscriptionObj->updateSubscription(USER_ID, $data);

// redirect
header("Location: /app/controllers/progress.php?proceed=$proceed");
