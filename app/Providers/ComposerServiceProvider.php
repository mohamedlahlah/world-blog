<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\views\composers\NavigationComposers;
use App\views\composers\MostpopularPosts;
use App\views\composers\Categorieslist;
use App\Category;
use Carbon\carbon;
use App\Post;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
         {

         view()->composer('layouts.frontend.sidebar',NavigationComposers::class) ;
        view()->composer('layouts.new.index.sidebar',MostpopularPosts::class) ;
       view()->composer('layouts.new.categories',Categorieslist::class) ;
       
        

      

  }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
  }
