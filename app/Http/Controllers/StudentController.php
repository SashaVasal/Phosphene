<?php

namespace App\Http\Controllers;

use App\Section;
use App\Student;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //
    public function OpenMainPage(){
        $sections =  Section::all()->where('subject_id',Subject::all()->where('group',Student::all()->where('id_student',Auth::user()->id)->first()->group)->first()->id);
        return view('student_page',['sections'=>$sections]);
    }
}
