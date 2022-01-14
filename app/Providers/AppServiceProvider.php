<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * https://www.semicolonworld.com/question/50076/laravel-how-to-get-current-user-in-appserviceprovider
         * Laravel session is initialized in a middleware so you can't access the session from a Service Provider, 
         * because they execute before the middleware in the request lifecycle, 
         * You should use a middleware to share your varibles from the session
         */
        view()->composer('*', function ()
        {
            $postsSliderID = [];
            $postsLatest1ID = [];
            $postsLatest2ID = [];

            $postsSlider = Post::where('slider', 1)
                                ->whereNotNull('slider')
                                ->where('show', 1)
                                ->get();

            foreach ($postsSlider as $key => $value) {
                $postsSliderID[] = $value->id;
            }

            $postsLatest1 = Post::whereNull('slider')
                                ->whereNull('hot')
                                ->where('show', 1)
                                ->whereNotIn('id', $postsSliderID)
                                ->orderBy('id', 'desc')
                                ->limit(1)
                                ->get();

            foreach ($postsLatest1 as $key => $value) {
                $postsLatest1ID[] = $value->id;
            }

            $postsLatest2 = Post::whereNull('slider')
                                ->whereNull('hot')
                                ->where('show', 1)
                                ->whereNotIn('id', $postsSliderID)
                                ->whereNotIn('id', $postsLatest1ID)
                                ->orderBy('id', 'desc')
                                ->limit(2)
                                ->get();

            foreach ($postsLatest2 as $key => $value) {
                $postsLatest2ID[] = $value->id;
            }

            $notSliderLatest1Latest2 = array_merge($postsSliderID, $postsLatest1ID, $postsLatest2ID);
            
            $hotNews = Post::whereNull('slider')
                            ->where('show', 1)
                            ->where('hot', 1)
                            ->whereNotIn('id', $notSliderLatest1Latest2)
                            ->orderBy('id', 'desc')
                            ->limit(2)
                            ->get();

            View::share('categories', Category::all());            
            View::share('postsTotal', Post::where('user_id', Auth::id())->count());
            View::share('postsSlider', $postsSlider);
            View::share('postsLatest1', $postsLatest1);
            View::share('postsLatest2', $postsLatest2);
            View::share('hotNews', $hotNews);

            Paginator::useBootstrap();
        });
    }
}
