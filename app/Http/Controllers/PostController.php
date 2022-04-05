<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use DB;
use App\Models\Comment;
use App\Models\Rating;
use Illuminate\Support\Facades\URL;

class PostController extends Controller
{
	public function index()
	{
		
		$data = Post::with('users')
				->with('rating')
				->orderBy("id", "DESC")
				->get();

		$stars = [];
		foreach ($data as $key => $value) {

			$sum_one_star = 0;
			$sum_two_star = 0;
			$sum_three_star = 0;
			$sum_four_star = 0;
			$sum_five_star = 0;
			$score = 0;
			$total_score = 0;
			$average = 0;
			foreach ($value['rating'] as $key => $star) {

				if($star->rating == 1){
					$sum_one_star += 1;
				}
				else if($star->rating == 2){
					$sum_two_star += 1;
				}
				else if($star->rating == 3){
					$sum_three_star += 1;
				}
				else if($star->rating == 4){
					$sum_four_star += 1;
				}
				else if($star->rating == 5){
					$sum_five_star += 1;
				}
					
			}

			$total_score += $sum_one_star * 1 + $sum_two_star * 2 + $sum_three_star * 3 + $sum_four_star * 4 + $sum_five_star * 5;
			$score += $sum_one_star + $sum_two_star + $sum_three_star + $sum_four_star + $sum_five_star;

			if($total_score != 0 && $score != 0){
				$average = ($total_score/$score);
			}
				array_push($stars, intval($average));
			}

		return view('frontend/index')
			->with('posts',$data)
			->with('stars',$stars);
	}

	public function about()
	{
		return view('frontend/about');
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
	public function scriptDetail($q_id)
	{
		DB::enableQueryLog();
		$data = DB::table('posts')
		->join('users', 'posts.user_id', '=', 'users.id')
		->where('posts.id',$q_id)
		->select('posts.*', 'users.name', 'users.email')

		->orderBy('created_at','DESC')
		->get();
	
		$comment = Comment::where('question_id',$q_id)->with('user')
			->orderBy('id', "DESC")
			->get();
		$rating = Rating::where('script_id',$q_id)->where('rating_user_id',session('user_id'))->pluck('rating')->first();
		if (empty($rating)) {
  			$rating=0;	
		}
		return view('frontend/question_detail_page')->with('posts',$data)->with('comments',$comment)->with('rating',$rating);
	}

}
