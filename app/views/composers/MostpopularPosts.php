<?php
namespace App\views\composers;
use Illuminate\View\View;
use App\Category;
use Carbon\carbon;
use App\Post;
use App\Tag;

class MostpopularPosts{

	public function compose(View $view)
	{
		$this->composePopularPosts($view);
	}


	private function composePopularPosts(View $view){

		$popularpost=Post::published()->take(3)->popular()->get();



		$view->with('popularpost',$popularpost);
		

	}

}