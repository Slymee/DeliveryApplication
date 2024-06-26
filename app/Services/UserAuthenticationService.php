<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class UserAuthenticationService
{
    public function authenticate(array $credentials): bool
    {
        $auth = null;

        if (filter_var($credentials['email_or_username'], FILTER_VALIDATE_EMAIL)) {
            $auth = Auth::attempt(['email' => $credentials['email_or_username'], 'password' => $credentials['password']]);
        }else{
            $auth = Auth::attempt(['username' => $credentials['email_or_username'], 'password' => $credentials['password']]);
        }

        return $auth;
    }
}
