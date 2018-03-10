<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    

    public function register(){

        return view('/welcome'); 
    }

    public function store(){

        $this->validate(request(),[
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);

        return view('/home');
    }

    public function destroy(){
        
        auth()->logout();

        return view('/welcome');
    }

    public function login(){

        if (! auth()->attempt(request(['email', 'password']))){
            return back();
        }
        return view ('/home');
    }
}
