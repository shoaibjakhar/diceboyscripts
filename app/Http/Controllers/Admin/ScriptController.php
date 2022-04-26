<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\URL;
use Session;

class ScriptController extends Controller
{
    public function index()
    {
        $scripts = Post::all();

        return view('Admin.Script.all_scripts',["scripts" => $scripts]);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('Admin.Script.edit_script',["post" => $post]);
    }

    public function update(Request $request)
    {
        $post = Post::find($request->id);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->script = $request->script;
        $post->result = $request->result;
        $post->update();

        Session::flash("message","Script Updated Successfully");
        return redirect('admin/all-scripts');
    }

    public function destroy($id)
    {
        $findPost = Post::find($id)->delete();

        Session::flash("message","Script Deleted Successfully");
        return redirect()->back();
    }

    public function pendingScript()
    {
        $scripts = Post::where("status","pending")->get();

        return view('Admin.Script.all_scripts',["scripts" => $scripts]);
    }

    public function approvedScript()
    {
        $scripts = Post::where("status","approved")->get();

        return view('Admin.Script.all_scripts',["scripts" => $scripts]);
    }

    public function declinedScript()
    {
        $scripts = Post::where("status","declined")->get();

        return view('Admin.Script.all_scripts',["scripts" => $scripts]);
    }

    public function approveScriptStatus($id)
    {
        $findPost = Post::find($id);

        $findPost->status = "approved";
        $findPost->update();

        Session::flash("message","Script Status Updated Successfully");
        return redirect()->back();        
    }

    public function declineScriptStatus($id)
    {
        $findPost = Post::find($id);

        $findPost->status = "declined";
        $findPost->update();

        Session::flash("message","Script Status Updated Successfully");
        return redirect()->back();        
    }

    public function scriptOrderBy(Request $request)
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
			$colum='title';
			$order='ASC';
		}
		else if($request->showByorder=='4')
		{
			$colum='title';
			$order='DESC';
		}

        $posts = Post::orderBy($colum, $order)
				->get();

                $text = '';
                foreach($posts as $key => $post){
                    
                    $decline_script = URL::to('admin/decline-script-status',$post->id);
                    $approve_script = URL::to('admin/approve-script-status',$post->id);
                    $edit_script = URL::to('admin/edit-script',$post->id);
                    $delete_script = URL::to('admin/delete-script',$post->id);

                    $text .= '<div class="media media-card media--card shadow-none rounded-0 align-items-center bg-transparent">
                        <div class="media-img media-img-sm flex-shrink-0">
                            <strong>'.$key.'</strong>
                        </div>
                        <div class="media-body p-0 border-left-0">
                            <h5 class="fs-14 fw-regular">'.$post->title.'</h5>
                            <small class="meta d-block lh-24">
                                <span>'.$post->description.'</span>
                            </small>
                        </div>';

                        if($post->status == "approved"){
                        $text .= '<a href="'.$decline_script.'"><button
                                class="btn border border-gray fs-17 ml-2 bg-danger text-white" type="button"
                                data-toggle="tooltip" data-placement="top" title="Decline"><i
                                    class="la la-thumbs-down"></i></button></a>';
                        }
                        else{
                        
                            $text .= '<a href="'.$approve_script.'"><button
                                class="btn border border-gray fs-17 ml-2 bg-success text-white" type="button"
                                data-toggle="tooltip" data-placement="top" title="Approved"><i
                                    class="la la-thumbs-up"></i></button>';
                        }
                        
                        $text .= '<a href="'.$edit_script.'"><button
                                    class="btn border border-gray fs-17 ml-2 bg-info text-white" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                        class="la la-edit"></i></button></a>

                            <a href="'.$delete_script.'"><button
                                    class="btn border border-gray fs-17 ml-2 bg-danger text-white" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="la la-trash"></i></button></a>
                    </div>';
                }
                echo $text;
                }
    }

