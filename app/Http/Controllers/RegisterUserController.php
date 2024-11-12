<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
  
    public function index()
    {
        
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

       $userAttributes = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(4)->mixedCase()->numbers()],

        ]);


        $employerAttributes = request()->validate([
            'employer' => ['required'],
            'logo' => ['required' , 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
        ]);

        $user = User::create($userAttributes);


       $logoPath = $request->logo->store('logos');


        $user->employer()->create([
            'name' => $employerAttributes['employer'], 
            'logo' => $logoPath
        ]);

        Auth::login($user);


        return redirect('/');

    }

}
