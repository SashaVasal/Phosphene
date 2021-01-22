<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Student;
use App\Manager;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['string', 'min:8', 'confirmed'],

        ]);
    }


    function create(Request $request)
    {
        $validation_acc = Validator::make($request->all(), [
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['string', 'min:8', 'confirmed'],
        ]);
        $new_name = '';
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        if($validation->passes()){
            $image = $request->file('select_file');
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$new_name);

        }

        if($validation_acc->passes()){

            $user = user::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'surname' => $request->surname,
                'role' => $request->role,
                'image'=> $new_name,
                'status'=>false
            ]);


            switch ($request->role) {

                case 'admin':
                    break;
                case 'manager':
                    Manager::create([
                        'id_manager' => $user->id,
                        'FIO' => $request->surname.' '.$request->name,
                    ]);
                    break;
                case 'teacher':
                    Teacher::create([
                        'fio' => $request->surname.' '.$request->name,
                        'id_teacher'=>$user->id,
                    ]);
                    break;
                case 'student':
                     Student::create([
                        'FIO' => $request->surname.' '.$request->name,
                        'id_student' => $user->id,
                        'course' =>$request->course,
                        'group'=>$request->group
                    ]);

                    break;
            }
            return 'successful';

        }
        else{
            $messages = $validation_acc->messages();
            return $messages;
        }

    }
}
