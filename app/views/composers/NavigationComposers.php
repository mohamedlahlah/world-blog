<?php
namespace App\views\composers;
use Illuminate\View\View;
use App\Category;
use Carbon\carbon;
use App\Post;
use App\Tag;

class NavigationComposers{

	public function compose(View $view)
	{
		$this->composeCategories($view);
		$this->composePopularPosts($view);
		$this->composeTag($view);
		$this->composeArchives($view);
	}


	private function composeCategories(View $view){

		$category1=Category:: with(['posts'=>function($query){
			return $query->where('published_at','<=',Carbon::now());}])
		->orderBy('title','desc')
		->get();
		$view->with('category1',$category1);
		

	}
	private function composePopularPosts(View $view){

		$popularpost=Post::published()->take(3)->popular()->get();



		$view->with('popularpost',$popularpost);
		

	}
	private function composeTag(View $view){
		$tag=Tag::has('posts')->get();


			$view->with('tag',$tag);
		}
		private function composeArchives(View $view)
    {
        $archives = Post::archives();

        $view->with('archives', $archives);
    }

}