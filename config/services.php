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
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
	'google' => [
		'client_id' => '253052212523-0uo6gdrpanl1fmnlds538b0kb0qg4uh4.apps.googleusercontent.com',
		'client_secret' => 'UfGFi7R2Jg_o3bFqBj3BK0Ke',
		'redirect' => 'http://localhost:8000/social-auth/google/callback',
	],
	'twitter' => [
		'client_id' => 'Kk7UK95SpRPMxYRWZCCMlO3HI',
		'client_secret' => 'ZjCsoHxnw6t3r7ZWvRoE4XtMipWUi1LNPNYIReGrB925HsLrgB',
		'redirect' => 'http://127.0.0.1:8000/social-auth/twitter/callback',
	],

];
