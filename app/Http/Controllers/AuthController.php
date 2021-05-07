<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $params)
    {
        $credentials = $params->only('email', 'password');
        if (Auth::attempt($credentials)) return redirect()->route('produtos.index', ['user' => $params]);
        return redirect()->route('entrar');
    }

    public function logout(Request $params)
    {
        Auth::logout();
        return redirect()->route('entrar');
    }
}
