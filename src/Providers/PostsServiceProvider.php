<?php

namespace Poring931\Posts\Providers;

use Illuminate\Support\ServiceProvider;
use Poring931\Posts\Console\Commands\PostCommand;

class PostsServiceProvider extends ServiceProvider
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

        $this->loadRoutesFrom(__DIR__.'/../routes/posts.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'posts');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');



        //для публикации вьюх, чтоб их можно было модернизировать
        // php artisan vendor:publish
        // php artisan vendor:publish --provider='Poring931\Posts\Providers\PostsServiceProvider'
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/posts'),
        ]);


        $this->publishes([
            __DIR__ . '/../config/posts.php' => config_path('posts.php'),
        ]);


        if ($this->app->runningInConsole()) {
            // php artisan posts:install - сообщения в консоли
            $this->commands([
                PostCommand::class,
            ]);
        }
    }
}
