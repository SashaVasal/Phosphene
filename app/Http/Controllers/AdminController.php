<?php

namespace App\Http\Controllers;
use App\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Chair;
use App\Manager;

class AdminController extends Controller
{
    //
    public function OpenMainPage(){
        $managers = Manager::all();
        $confirm_acc = user::all()->where('status',0)->sortBy('role');
        return view('admin_page',['confirm_acc'=>$confirm_acc,'managers'=>$managers]);

    }

    public function AppManager(Request $req){
        if(Auth::user()->role == 'admin'){
            Chair::create([
                "id_manager"=>$req->id_manager,
                "name"=>$req->name_of_kafedra
            ]);
        }
        return "successful";
    }

    public function DropManager(Request $req){
        $managers = $req->chosen;
        if(Auth::user()->role == 'admin'){
            foreach($managers as $t){
                DB::table('managers')->find($t)->delete();
                DB::table('users')->find($t)->update(['role'=>'empty']);
            }
        }
    }

    public function confirm_students(Request $req){
        $teacher = $req->chosen;
        if(Auth::user()->role == 'admin'){
            foreach($teacher as $t){
                DB::table('users')->find($t)->update(['status'=>1]);
            }
        }

    }
}
