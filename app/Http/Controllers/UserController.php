<?php

namespace App\Http\Controllers;

use App\Section;
use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function edit_profile(){
        return view('edit_profile');
    }
    public function edit_main_data(Request $request){
        User::all()->find(Auth::user()->id)->update([
            'name' => $request->name,
            'surname'=>$request->surname,
            'email'=>$request->email
        ]);
    }

}
