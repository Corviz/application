<?php

return [
    /*
     * Controllers
     */
    'controllersPrefix' => '\\App\\Controller\\',

    /*
     * Request parsers
     */
    'requestParsers' => [
        \Corviz\Http\RequestParser\FormUrlEncodedParser::class,
        \Corviz\Http\RequestParser\MultipartFormDataParser::class,
        \Corviz\Http\RequestParser\JsonParser::class
    ]
];