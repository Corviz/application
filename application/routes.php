<?php

/**
 * Register application routes.
 */
use App\Http\Controller;
use Corviz\Routing\Route;

Route::get('/', [
    'controller' => Controller\Home::class,
    'action'     => 'index',
    'alias'      => 'home.index',
    //'middleware' => 'auth'
]);
