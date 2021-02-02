<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\group;
use App\Comments;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/getGroup', function(){

    return group::all();
});

Route::get('/admin_page', 'AdminController@OpenMainPage');
Route::post('/admin_page/app_manager', 'AdminController@AppManager');
Route::post('/admin_page/confirm_students', 'AdminController@confirm_students');
Route::post('/admin_page/drop_manager', 'AdminController@DropManager');

Route::get('/manager_page', 'ManagerController@OpenMainPage');
Route::post('/manager_page/confirm_students', 'ManagerController@confirm_students');
Route::post('/manager_page/create_subject', 'ManagerController@create_subject');
Route::post('/manager_page/create_group', 'ManagerController@create_group');




Route::get('/teacher_page', 'TeacherController@OpenMainPage');
Route::post('/teacher_page/create_section', 'TeacherController@create_section');
Route::post('/teacher_page/create_comment', 'TeacherController@create_comment');
Route::get('/teacher_page/get_comments', 'TeacherController@get_comments');


Route::get('/student_page', 'StudentController@OpenMainPage');

Route::get('/edit_profile', 'UserController@edit_profile');
Route::post('/edit_profile/edit_main_data', 'UserController@edit_main_data');

Route::get('/section/{id}',function($id){
    return view('section',['id'=>$id]);;
});
Route::post('/section/{id}',function($id){

    return view('section',['id'=>$id]);

});

Route::get('/edit', 'UserController@edit');

Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout',  'Auth\LoginController@logout')->name('logout');

Route::get('register',   'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register',   'Auth\RegisterController@create');

Route::get('password/reset',  'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email',  'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}',   'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset',   'Auth\ResetPasswordController@reset');

//Route::get('/home', 'HomeController@index')->name('home');
