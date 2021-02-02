<?php

namespace App\Http\Controllers;

use App\user;
use App\Group;
use App\Teacher;
use App\Manager;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    //
    public function OpenMainPage(){
        if(Auth::user()->status){
            $teachers = teacher::all();
            $managers = manager::all();
            $group = group::all();
            $confirm_acc = user::all()->where('status',0)->where('role','student');
            return view('manager_page',['teachers'=>$teachers,'managers'=>$managers,'confirm_acc'=>$confirm_acc,'group'=>$group]);
        }
        return view('manager_page');
    }
    public function confirm_students(Request $req){
        $teacher = $req->chosen;
        if(Auth::user()->role == 'manager' && Auth::user()->status){
            foreach($teacher as $t){
                DB::table('users')->find($t)->update(['status'=>1]);
            }
        }
    }
    public function create_group(Request $req){

        if(Auth::user()->role == 'manager' && Auth::user()->status){

            Group::create([
                'name'=>$req->name_of_group,
            ]);
        }
    }

    public function create_subject(Request $req){
        if(Auth::user()->role == 'manager' && Auth::user()->status){
            Subject::create([
                'name'=>$req->name_of_subject,
                'id_teacher'=>$req->teacher_name,
                'group'=>$req->name_of_group
            ]);
        }
    }

}
