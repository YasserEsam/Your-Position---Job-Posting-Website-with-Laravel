<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(! FacadesAuth::attempt($attributes)){
            throw ValidationValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);
           
        }
        request()->session()->regenerate();

        return redirect('/');
    }
}
