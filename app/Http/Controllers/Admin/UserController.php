<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('Admin.User.all_users',["users" => $users]);
    }

    public function edit($id)
    {
       return view('Admin.User.edit_user');
    }

    public function destroy($id)
    {
        $findUser = User::find($id)->delete();

        Session::flash("message","User Deleted Successfully");
        return redirect()->back();
    }
}
