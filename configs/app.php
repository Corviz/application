<?php

use \App\Http\Middleware;
use \Corviz\Http\RequestParser;

return [
    /*
     * Request parsers
     */
    'requestParser' => [
        RequestParser\FormUrlEncodedParser::class,
        RequestParser\MultipartFormDataParser::class,
        RequestParser\JsonParser::class
    ],

    /*
     * Middlewares
     */
    'middleware' => [
        'auth' => Middleware\Auth::class
    ]
];
