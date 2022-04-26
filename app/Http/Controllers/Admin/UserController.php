<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Session;

class UserController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id ?? 1;
        $users = User::whereNotIn("id", [$user_id])->get();

        return view('Admin.User.all_users',["users" => $users]);
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('Admin.User.edit_user',["user" => $user]);
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);

        if($request->file('image'))
        {
             $name = $request->file('image')->getClientOriginalName();
             $user->avatar = $name;
             $path = $request->file('image')->store('public/images/profile');
             $user->profile_photo_path = $path;
        }

        $user->name = $request->username;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->update();

        Session::flash("message","User Profile Updated Successfully");
        return redirect()->back();
    }

    public function destroy($id)
    {
        $findUser = User::find($id)->delete();

        Session::flash("message","User Deleted Successfully");
        return redirect()->back();
    }

    public function userOrderBy(Request $request)
    {
        // Newest
		// Oldest
		// A to Z
		// Z to A
		$colum='id';
		$order='DESC';

		if($request->showByorder=='1')
		{
			// Newest
			//->orderBy('created_at', 'ASC')
			$colum='created_at';
			$order='DESC';
		}
		else if($request->showByorder=='2')
		{
			// Oldest
			//->orderBy('created_at', 'DESC')
			$colum='created_at';
			$order='ASC';
			
		}
		else if($request->showByorder=='3')
		{
			// A to Z
			$colum='name';
			$order='ASC';
		}
		else if($request->showByorder=='4')
		{
			$colum='name';
			$order='DESC';
		}

        $users = User::orderBy($colum, $order)
				->get();

                $text = '';
                foreach($users as $key => $user){
                    
                    $edit_user = URL::to('admin/edit-user',$user->id);
                    $delete_user = URL::to('admin/delete-user',$user->id);
                    $image = '../storage/app/'.$user->profile_photo_path;

                    $text .= '<div class="media media-card media--card shadow-none rounded-0 align-items-center bg-transparent">
                        <div class="media-img media-img-sm flex-shrink-0">
                            <strong>'.$key.'</strong>
                        </div>
                        <div class="media-img media-img-sm flex-shrink-0">
                                <img src="'.$image.'" alt="avatar">
                        </div>
                        <div class="media-body p-0 border-left-0">
                            <h5 class="fs-14 fw-regular">'.$user->name.'</h5>
                            <small class="meta d-block lh-24">
                                <span>'.$user->email.'</span>
                            </small>
                        </div>';

                        $text .= '<a href="'.$edit_user.'"><button class="btn border border-gray fs-17 ml-2" type="button" data-placement="top" title="Edit"><i class="la la-edit"></i></button></a>

                        <a href="'.$delete_user.'" ><button class="btn border border-gray fs-17 ml-2" type="button" data-placement="top" title="Delete"><i class="la la-trash"></i></button></a>
                    </div>';
                }
                echo $text;
                }
}
