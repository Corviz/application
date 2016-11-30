<?php

namespace App\Provider;

use Corviz\DI\Provider;
use Corviz\Http\Request;
use Corviz\Http\RequestParser\FormUrlEncodedParser;
use Corviz\Http\RequestParser\MultipartFormDataParser;
use Corviz\Http\RequestParser\JsonParser;

class RequestProvider extends Provider
{
    /**
     * Init dependencies in the application container.
     */
    public function register()
    {
        //Register request in the container
        $this->container()->set(Request::class, Request::current());

        //Register parsers
        Request::registerParser(FormUrlEncodedParser::class);
        Request::registerParser(MultipartFormDataParser::class);
        Request::registerParser(JsonParser::class);
    }
}