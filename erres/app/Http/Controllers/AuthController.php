<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginFrom()
    {
        return view('auth.login');
    }

    public function loginDo(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (!\Auth::attempt($credentials)){
            return redirect()
                ->route('auth.login.form')
                ->withInput()
                ->with('message.error','Las credenciales no coinciden');
        }

        return redirect()
            ->route('admin.dashboard')
            ->with('message.success', 'Bienvenido a Erres!');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()
            ->route('auth.login.form')
            ->with('message.success', 'Sesión finalizada con éxito!');
    }
}
