<?php

namespace App\Http\Middleware;

use App\AuthProvider;
use Closure;
use Corviz\Http\Middleware;

class Auth extends Middleware
{
    /**
     * @var \App\AuthProvider
     */
    protected $authProvider;

    /**
     * {@inheritdoc}
     */
    public function handle(Closure $next)
    {
        if ($this->authProvider->authenticated()) {
            return $next();
        }

        throw new \Exception('Access denied.');
    }

    /**
     * Authentication constructor.
     *
     * @param \App\AuthProvider $authProvider
     */
    public function __construct(AuthProvider $authProvider)
    {
        $this->authProvider = $authProvider;
    }
}
