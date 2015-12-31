<?php
define("USERNAME", "wincomdesigns");
define("PASSWORD", "Zulu54321!");
define("API_ID", "3568398");
define("PHONE_NO", "27715972338");



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