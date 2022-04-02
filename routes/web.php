<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::prefix('admin')->group(function () {

	Route::get('login', function () {
    	return view('auth.admin_login');
	});

Route::middleware([App\Http\Middleware\RoleAdmin::class])->group(function(){

	Route::get('dashboard',"Admin\DashboardController@dashboard");

	Route::get('profile',"Admin\ProfileController@edit");
	Route::post('profile',"Admin\ProfileController@update");

	Route::get('all-users',"Admin\UserController@index");
	Route::get('edit-user/{id}',"Admin\UserController@edit");
	Route::post('update-user',"Admin\UserController@update");
	Route::get('delete-user/{id}',"Admin\UserController@destroy");

	Route::get('all-scripts',"Admin\ScriptController@index");
	Route::get('edit-script/{id}',"Admin\ScriptController@edit");
	Route::post('update-script',"Admin\ScriptController@update");
	Route::get('delete-script/{id}',"Admin\ScriptController@destroy");
	Route::get('pending-scripts',"Admin\ScriptController@pendingScript");
	Route::get('approved-scripts',"Admin\ScriptController@approvedScript");
	Route::get('declined-scripts',"Admin\ScriptController@declinedScript");

	Route::get('approve-script-status/{id}',"Admin\ScriptController@approveScriptStatus");
	Route::get('decline-script-status/{id}',"Admin\ScriptController@declineScriptStatus");

	});
});

// Route::get('admin', function () {
//     return view('Admin.layout');
// });

//   >>>>>>>>>>>>user Route<<<<<<<<<<<<<<<

Route::get('about',[PostController::class,'about']);
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

Route::get('questionDetail/{id}',[PostController::class,'question_detail']);
Route::get('comment',[CommentController::class,'comment']);
Route::post('comment',[CommentController::class,'save_comment']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
