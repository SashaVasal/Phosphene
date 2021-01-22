<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{

    public function imageUpload(Request $request)
    {
        $path = $request->file('image')->store('upload','public');
            return view('welcome',['path'=>$path]);
    }



}
