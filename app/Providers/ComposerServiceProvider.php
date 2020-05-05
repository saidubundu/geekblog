<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        view()->composer('frontend.includes.lifeStyle', function ($view){
//            $lifeStyle = Post::life()->take(5)->get();
//            return $view->with()
//        });
    }
}
