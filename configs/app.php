<?php

return [
    /*
     * Namespaces
     */
    'controllersPrefix' => '\\App\\Controller\\',
    'modelsPrefix' => '\\App\\Model\\',

    /*
     * Request parsers
     */
    'requestParsers' => [
        \Corviz\Http\RequestParser\FormUrlEncodedParser::class,
        \Corviz\Http\RequestParser\MultipartFormDataParser::class,
        \Corviz\Http\RequestParser\JsonParser::class
    ],

    /*
     * Middlewares
     */
    'middlewares' => [
        'auth' => \App\Http\Middleware\Auth::class
    ]
];