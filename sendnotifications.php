<?php
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';
// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

//Both the to and from numbers must be in the form: 1-XXX-XXX-XXXX
function sendMessage($to, $from, $body) {
//require __DIR__ . '/twilio-php-master/Twilio/autoload.php';
// Use the REST API Client to make requests to the Twilio REST API
// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC834c74ed3ae9db6a4b04bbe2298117b7';
$token = '0c88ffe5e97d33257dd1cda81db6463c';
$client = new Client($sid, $token);
$reciever = '+'.$to;

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $reciever,
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+16032763184 ',
        // the body of the text message you'd like to send
        'body' => "$body \n text me back at $from"
    )
);
}
