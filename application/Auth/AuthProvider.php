<?php

namespace App\Auth;

class AuthProvider
{
    /**
     * Returns true if user is authenticated,
     * otherwise returns false.
     *
     * @return bool
     */
    public function authenticated() : bool
    {
        //@TODO Implement authentication check.
        return false;
    }

    /**
     * Attempt to authenticate user.
     *
     * @param string $user
     * @param string $password
     *
     * @return bool
     */
    public function login(string $user, string $password) : bool
    {
        //@TODO Implement login check.
        return false;
    }

    /**
     * Sign out current user.
     */
    public function logout() : bool
    {
        //@TODO Implement method.
        return true;
    }
}
