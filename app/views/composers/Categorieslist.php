<?php
namespace App\views\composers;
use Illuminate\View\View;
use App\Category;
use Carbon\carbon;
use App\Tag;


class Categorieslist{

	public function compose(View $view)
	{
		$this->composeCategories($view);
		$this->composeTag($view);

	}


private function composeCategories(View $view){

		$category1=Category:: with(['posts'=>function($query){
			return $query->where('published_at','<=',Carbon::now());}])
		->orderBy('title','desc')
		->get();
		$view->with('category1',$category1);
		

	}

	private function composeTag(View $view){
		$tag=Tag::has('posts')->get();


			$view->with('tag',$tag);
		}
}