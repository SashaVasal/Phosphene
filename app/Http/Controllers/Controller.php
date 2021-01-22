<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\users;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function main_page(){
        return "hello";
    }
    public function register_page(){
        return view('register_page');
    }
    public function create_account(Request $request){
        student::create([
            "name"=>$request->name,
            "surname"=>$request->surname,
            "password"=>$request->password,
            "image"=>$request->image,
            "email"=>$request->mail,
            "role"=>$request->role[0],
            "group"=>$request->group
        ]);
    }
}
