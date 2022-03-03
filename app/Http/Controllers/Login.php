<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function login(Request $request)
    {
        $sesion = request()->only('email', 'password');
        $recuerdame = request()->filled('recuerdame');
        if (Auth::attempt($sesion, $recuerdame)) {
            request()->session()->regenerate();
            return view('contenido.inicio');
        }
        return view('plantilla.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('plantilla.login');
    }
}
