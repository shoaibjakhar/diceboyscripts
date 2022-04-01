<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use DB;
use App\Models\Comment;
use Illuminate\Support\Facades\URL;

class PostController extends Controller
{
	public function index()
	{
		DB::enableQueryLog();
		$data = DB::table('posts')
		->join('users', 'posts.user_id', '=', 'users.id')
		->select('posts.*', 'users.name', 'users.email')
		->orderBy('created_at','DESC')
		->get();
		return view('frontend/index')->with('posts',$data);
	// $posts = User::find(4)->posts;
	// $user = User::find(4);
	// dd($posts);
	// dd($user);
	//dd(DB::getQueryLog());
		//$posts=Post::all();
	//print_r($posts);

		
	}
	public function userpost()
	{
		$posts=Post::where('user_id',session('user_id'))->get();

		return view('frontend/add_script')->with('posts',$posts);
	}
	public function add_post(Request $request)
	{
		$validated = $request->validate([
			'title' => 'required|max:255',
			'description' => 'required',
			'script' => 'required',
		]);
		$data=$request->input();
		$post_data=new post();
		$post_data->user_id =session('user_id');
		$post_data->title =$data['title'];
		$post_data->description=$data['description'];
		$post_data->script  =$data['script'];
		
		$post_data->save();
		$request->session()->flash('success','You are register Successfuly');
		return redirect()->back();
	}

	public function selectBy(Request $request)
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
		}
		else if($request->showByorder=='4')
		{

		}
		else if($request->showByorder=='5')
		{

		}
		else if($request->showByorder=='5')
		{

		}

		$data = DB::table('posts')
		->join('users', 'posts.user_id', '=', 'users.id')
		->select('posts.*', 'users.name', 'users.email')
		->orderBy($colum,$order)
		->get();

		$text='';

		foreach($data as $key => $post)
		{
			$url=URL::to('questionDetail'); 
			$text.='<div class="questions-snippet">
			<div class="media media-card media--card align-items-center">
			<div class="votes">
			<div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
			<span class="vote-counts">0</span>
			<span class="vote-icon"></span>
			</div>
			<div class="answer-block d-flex align-items-center justify-content-between" title="Comments">
			<span class="vote-counts">0</span>
			<span class="answer-icon"></span>
			</div>
			</div>
			<div class="media-body">
			<h5><a href='.$url.'>'.$post->title.'</a></h5>
			<p class="fs-10 pt-3">'.$post->description.'</p>
			'.$post->script.'
			<small class="meta">
			<span class="pr-1">'.$post->created_at.'</span>
			<a href="#" class="author">'.$post->name.'</a>
			</small>
			</div>
			</div>
			</div>';
		}

		echo $text;
	}
	public function question_detail($q_id)
	{
		DB::enableQueryLog();
		$data = DB::table('posts')
		->join('users', 'posts.user_id', '=', 'users.id')
		->where('posts.id',$q_id)
		->select('posts.*', 'users.name', 'users.email')

		->orderBy('created_at','DESC')
		->get();
	
		$comment = Comment::where('question_id',$q_id)->get();

		return view('frontend/question_detail_page')->with('posts',$data)->with('comments',$comment);
	}

}
