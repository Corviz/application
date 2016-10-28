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
    ]
];