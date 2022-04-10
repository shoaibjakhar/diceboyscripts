<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;

class UsersController extends Controller
{
	public function index()
	{
		return view('frontend/index');
	}
	public function signup_view(Request $request)
	{
		return view('frontend/signup');
	}
	public function signup(Request $request)
	{
		$validated = $request->validate([
			'username' => 'required',
			'email' => 'required|unique:users|max:255',
			'password' => 'required|max:255|min:6',
		]);
		$data=$request->input();
		$user_data=new User();
		$user_data->name =$data['username'];
		$user_data->email=$data['email'];
		$user_data->password  =Hash::make($data['password']);
		$user_data->role  =2;
		$user_data->save();
		$request->session()->flash('success','You are register Successfuly');
		return redirect('signup');
	}
	public function login_view()
	{
		return view('frontend/login');
	}
	public function login(Request $request)
	{
		$validated = $request->validate([
			'email' => 'required|max:255',
			'password' => 'required|max:255|min:6',
		]);

		//$user = User::where('email',$request->email)->where('password',$request->password)->pluck('id')->first();
		$user = User::where('email',$request->email)->first();
		$checkPassword = Hash::check($request->input('password'), $user->password);

		if($checkPassword == true)
		{
			Session()->put('user_id',$user->id);
			Session()->put('user_profile',$user->profile_photo_path);
			Session()->put('user_name',ucfirst($user->name));
			
			//chech Session()->has('user_name');

			// delete all session Session()->flush()

			// get session  Session('user_name');

			//  get run query dd(DB::getQueryLog());

			return redirect($request->previous_url_login);
		}
		else
		{ 
			$request->session()->flash('error','Invalid login Details');
			return redirect('login');
		}
	}
	
	public function edit_profile()
	{
		$id= Session('user_id');
		$user = User::where('id',$id)->first();
		return view('frontend/edit_profile')->with('user_data',$user);
	}

	public function logout()
	{
		Session()->flush();
		return redirect('login');
	}

	public function update_profile(request $request)
	{
		DB::enableQueryLog();
		$validated = $request->validate([
			'username' => 'required|max:255',
		]);
         
         $user = User::find(Session('user_id'));
          

    	if($request->file('image'))
    	{
    		
	         $name = $request->file('image')->getClientOriginalName();
	         $path = $request->file('image')->store('public/images/profile');

	         $user->update(array('name'=>$request->username,'avatar'=>$name,'profile_photo_path'=>$path));
	         Session()->put('user_profile',$path);
	         Session()->put('user_profile',$path);
    	}
    	else
    	{
    		$user->update(array('name' => $request->username));
    	//	dd(DB::getQueryLog());
    	}
		Session()->put('user_name',ucfirst($user->name));
		$request->session()->flash('success','Your profile updated Successfuly');

		 return Redirect()->back();
	}

	public function update_email(request $request)
	{
		$validated = $request->validate([
			'email' => 'required|max:255|unique:users',
		]);
		$user = User::find(Session('user_id'));
		$user->update(array('email' => $request->email));
	
		$request->session()->flash('success','Your email updated Successfuly');
		
		 return Redirect()->back();
	}

	public function update_password(Request $request)
	{
		$validated = $request->validate([
			'password' => 'required|max:255',
			'new_password' => 'required|max:255',
			'password_confirmation' => 'required_with:new_password|same:new_password|min:6',
		]);
		$password = User::where('id',session('user_id'))->first();
		$checkPassword = Hash::check($request->password, $password->password);
		if($checkPassword == true)
		{
		$user = User::find(Session('user_id'));
		$user->update(array('password' => $request->new_password));
	
		$request->session()->flash('success','Your password updated Successfuly');

		 return Redirect()->back();
		}
		else{
			session()->flash('success','Invalid Old Password');

		 	return Redirect()->back();
		}
	}


}
