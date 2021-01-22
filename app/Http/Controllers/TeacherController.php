<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Section;
use App\Comment;
use App\Subject;
use Illuminate\Support\Facades\Auth;
use Validator;
class TeacherController extends Controller
{
    //
    public function OpenMainPage(){
        $subjects = Subject::all()->where('id_teacher',Auth::user()->id);
        $sections = Section::all()->where('id_teacher',Auth::user()->id);
        return view('teacher_page',['subjects'=>$subjects,'sections'=>$sections]);
    }
    public function create_section(Request $req){
        Section::create([
            'name'=>$req->name_of_section,
            'id_teacher'=>Auth::user()->id,
            "subject_id" => $req->subject_id
        ]);
        return $req;
    }
    public function create_comment(Request $request){
        $new_name = '';
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        if($validation->passes()){
            $image = $request->file('select_file');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$new_name);

        }

        Comment::create([
            'section_id'=>$request->section,
            'value'=>$request->text,
            'from'=>Auth::user()->id,
            'file'=>$new_name
        ]);
        return 'ok';
    }

}
