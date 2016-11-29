<?php

use \App\Http\Middleware;
use \Corviz\Http\RequestParser;

return [
    /*
     * Middlewares
     */
    'middleware' => [
        'auth' => Middleware\AuthMiddleware::class,
    ],

    /*
     * Application providers
     */
    'providers' => [
        \App\Provider\AppProvider::class,
        \App\Auth\AuthProvider::class,
    ],

    /*
     * Request parsers
     */
    'requestParser' => [
        RequestParser\FormUrlEncodedParser::class,
        RequestParser\MultipartFormDataParser::class,
        RequestParser\JsonParser::class,
    ],
];
