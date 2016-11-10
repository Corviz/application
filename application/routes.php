<?php

/**
 * Register application routes.
 */
use \Corviz\Routing\Route;

Route::get('/', ['controller' => 'Home', 'action' => 'index', 'alias' => 'home.index']);
