<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['expect'=>'destroy']);
    }

    public function store(){
        if(! auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message'=>'please check your credential'
            ]);
        }
        return redirect()->home();
    }
    public function create(){
        return view('register');
    }
}
