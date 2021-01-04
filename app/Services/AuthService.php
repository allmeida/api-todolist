<?php


namespace App\Services;


class AuthService
{
    public function login(string $email, string $password)
    {
        $login = [
            'email' => $email,
            'password' => $password
        ];

        if (!$token = auth()->attempt($login)) {
            //erro
        }

        return [
            'access_token' => $token,
            'token_type' => 'Bearer',
        ];
    }
}
