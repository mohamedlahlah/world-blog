<?php

namespace App\Http\Controllers;
use Carbon\carbon;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use App\Tag;
use App\Subscriber;

use DB;
use Illuminate\Database\Eloquent\Model;
class Postcontroller extends Controller
{	protected $limit=3;
	
	public function index()
	{
		// DB::enableQueryLog();
		$posts=Post::with('auther','tags','category','comments')
		->latest()
		->published()
		->filter(request()->only(['term','month','year']));
		// if($term=request('term')){
			// 	$posts->where('title','LIKE',"%{$term}%");
			// }
			
			$posts=$posts->simplePaginate(5);
			return view('layouts.new.index.main2',compact('posts'));
			// dd(DB::getQueryLog());
			
		}
		public function search()
		{	
		
			$posts=Post::with('auther','tags','category','comments')
			->published()
			->latest()
			->filter(request()->only(['term','month','year']))
			->simplePaginate($this->limit);
			  return view('layouts.new.index.search',compact('posts','relatedposts'));
			 
		}
		public function category(Category $category)
		{	
			$categoryName=$category->title;
			
			
			$posts=$category->posts()
			->with('auther','tags','comments')
			->latestfirst()
			->Published()
			->simplePaginate(5);
			
			
			return	view('layouts.new.category2',compact('posts','categoryName'));
			
		}
		public function tag(Tag $tag)
		{	
			$tagName=$tag->name;
			
			
			$posts=$tag->posts()
			->with('auther','category','comments')
			->latestfirst()
			->Published()
			->simplePaginate(5);
			
			
			return	view('layouts.new.category2',compact('posts','tagName'));
			
		}
		public function auther(User $auther){
			$autherName=$auther->name;
			
			$posts=$auther->posts()
			->with('category','tags','comments')
			->latestfirst()
			->Published()
			->simplePaginate(5);
			
			
			return	view('layouts.new.category2',compact('posts','autherName'));
			
		}
		
		
		
		public function show(Post $post){
			$post->increment('view_count');
			$postComments=$post->comments()->simplePaginate(3);
			
			return view('layouts.new.single-blog',compact('post','postComments'));
		}

	// public function load_more(Request $request){
		// 	if($request->ajax()){
		// 		if($request->id >0 ){
		// 			$data=DB::table('posts')
		// 			->where('id','<',$request->id)
		// 			->orderBy('id','DESC')
		// 			->limit(5)
		// 			->get();
		// 		}
		// 		else{
		// 			$data=DB::table('posts')
		// 			->orderBy('id','DESC')
		// 			->limit(5)
		// 			->get();
		// 		}
		// 		$output='';
		// 		$last_id='';
		// 		if(!$data->isEmpty()){


		// 		}
		// 	}

	// }

		public function submitemail(){
		$data=$this->validate(request(),['email'=>'email|required']);
		$add= new subscriber;
		$add->email= request('email');
		
		// // //$add->add_by= request('add_by');
		$add->save();
		session()->push('stats','successfully');
		return redirect('/')->with('you have been successfully subscribers');

		}





	}
	