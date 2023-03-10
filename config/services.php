<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    // 'mailgun' => [
    //     'domain' => env('MAILGUN_DOMAIN'),
    //     'secret' => env('MAILGUN_SECRET'),
    //     'endpoint' => env('MAILGUN_ENDPOINT', 'api.eu.mailgun.net'),
    //     'scheme' => 'https',
    // ],

    'mailgun' => array(  
        'domain' => 'sandboxed586ef2eb6a49eba61dfcfcba7d5f20.mailgun.org',  
        'secret' => '33df3ad4a6dd2143132aeaca1ab1e45d-b0ed5083-54904c13',  
        'endpoint' => 'api.mailgun.net',
       
    ),  

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
