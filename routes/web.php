<?php

use App\Http\Controllers\FEStudentRegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/studentRegister',function(){
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=> 'client'],function(){
    Route::resource('/registerForm', FEStudentRegisterController::class);
    
});

Route::group(['prefix' => 'admin','namespace' => 'App\Http\Controllers','middleware' => 'auth'],function(){
    Route::resource('programs',ProgramController::class);
    Route::resource('academic',AcademicController::class);
    Route::resource('register_student',RegisterController::class);
});

// Route::resource('register_form',FEStudentRegisterController::class);
