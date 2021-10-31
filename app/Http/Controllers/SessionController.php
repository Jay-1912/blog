<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{

    public function create(){
        return view('User-Side.login');
    }

    public function store(){
        $attributes = request()->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required'
        ]);

        $remember_me = request()->has('remember_me') ? true : false;

        if(Auth::attempt($attributes, $remember_me)){
            session()->regenerate();
            return redirect('/')->with('success','Hey, welcome again!');;
        }

       // auth failed
        return back()
        ->withInput()
        ->withErrors(['username' => 'Invalid Credentials']);
    }

    public function destroy(){
        Auth::logout();
        return redirect('/')->with('success','Hey, we will meet soon!');;
    }
}
