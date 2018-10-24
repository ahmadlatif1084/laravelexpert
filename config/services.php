<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

//    'facebook' => [
//        'client_id' => '1642032749229165',         // Your facbook Client ID
//        'client_secret' => 'd6cbfb386d4aec4439725110e0a0d68b', // Your facbook Client Secret
//        'redirect' => 'http://localhost/laravelexpert/login/facebook/callback',
//    ],
    'facebook' => [
        'client_id' => env('FB_ID'),         // Your facbook Client ID
        'client_secret' => env('FB_SECRET'), // Your facbook Client Secret
        'redirect' => env('FB_URL'),
    ],

    'github' => [
        'client_id' => env('9ba9c970478b9a6fef78'),         // Your facbook Client ID
        'client_secret' => env('ddf9b27daf19a168b6a4967a67ef47314ae25ebc'), // Your facbook Client Secret
        'redirect' => 'http://localhost/laravelexpert/login/github/callback',
    ],

];
