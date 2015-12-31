<?php
define("USERNAME", "your_clickatell_api_user_name");
define("PASSWORD", "your_clickatell_api_password");
define("API_ID", "clickatell_api_id_here");
define("PHONE_NO", "the_phone_number_you_want_to_send_to");



$eventName = $modx->event->name; // get events
$user = $modx->getUser(); // get user details
$username = $user->get('username');
define("MESSAGE_SAVED", "A document was saved on Modx by $username");
define("MESSAGE_LOGIN", "Someone logged in to your Modx Installation.");

switch($eventName) {
    case 'OnBeforeDocFormSave':
        $call = "http://api.clickatell.com/http/sendmsg?user=".USERNAME."&password=".PASSWORD."&api_id=".API_ID."&to=".PHONE_NO."&text=".urlencode(MESSAGE_SAVED); //echo $call;
        $send = file_get_contents($call);
        
        $modx->event->output('Hi there '.$user->get('username'));
    break;
    case 'OnManagerLogin':
        $call = "http://api.clickatell.com/http/sendmsg?user=".USERNAME."&password=".PASSWORD."&api_id=".API_ID."&to=".PHONE_NO."&text=".urlencode(MESSAGE_LOGIN); //echo $call;
        $send = file_get_contents($call);
    break;
}