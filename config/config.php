<?php

return [
    /*
     | Twilio sid which will authorize our twilio application.
     */
    'sid'        => env('TWILIO_SID', ''),

    /*
     | Twilio auth token which will authorize our twilio application.
     */
    'auth_token' => env('TWILIO_AUTH_TOKEN', ''),

    /*
     | Twilio number which will be used as sender number.
     | get it here: https://console.twilio.com/us1/develop/phone-numbers/manage/incoming
     */
    'number'     => env('TWILIO_NUMBER', ''),
];
