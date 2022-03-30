<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('layout.app');
// });

//   >>>>>>>>>>>>user Route<<<<<<<<<<<<<<<

Route::get('login',[UsersController::class,'login_view']);
Route::post('userlogin',[UsersController::class,'login']);
Route::get('signup',[UsersController::class,'signup_view']);
Route::post('usersignup',[UsersController::class,'signup']);
// Route::get('index',[UsersController::class,'index']);
Route::get('editprofile',[UsersController::class,'edit_profile']);
Route::get('logout',[UsersController::class,'logout']);
Route::post('updateprofile',[UsersController::class,'update_profile']);
Route::post('updateemail',[UsersController::class,'update_email']);
Route::post('changepassword',[UsersController::class,'update_password']);


Route::get('/',[PostController::class,'index']);
Route::get('addscript',[PostController::class,'userpost']);
Route::post('addpost',[PostController::class,'add_post']);

Route::post('orderBy',[PostController::class,'selectBy']);
Route::get('selectorder',[PostController::class,'selectorder']);