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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'stripe' => [
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
        'client_id' => '495871250616-dm9lpekbgiq1uf4fvg6rqdvecje0g5pd.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://truthbti.herokuapp.com/public/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '373582707681139',
        'client_secret' => '1eec94fc5281a976c54c0b4bdc1be10a',
        'redirect' => 'https://truthbti.herokuapp.com/public/auth/facebook/callback',
    ],
    "apple" => [
        "client_id" => "<your_client_id>",
        "client_secret" => "<your_client_secret>",
    ],

];
