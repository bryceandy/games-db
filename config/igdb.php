<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Twitch credentials
    |--------------------------------------------------------------------------
    |
    | These are the credentials you got from https://dev.twitch.tv/console/apps
    |
    */
    'credentials' => [
        'client_id' => env('TWITCH_CLIENT_ID', ''),
        'client_secret' => env('TWITCH_CLIENT_SECRET', ''),
    ],

    /*
    |--------------------------------------------------------------------------
    | Twitch Auth URL
    |--------------------------------------------------------------------------
    |
    | This the URL to request access_tokens
    |
    */
    'auth_url' => env('TWITCH_AUTH_URL'),

    /*
    |--------------------------------------------------------------------------
    | IGDB base URL
    |--------------------------------------------------------------------------
    |
    | This the URL to perform requests after authentication
    |
    */
    'base_url' => env('IGDB_REQUEST_URL'),
];
