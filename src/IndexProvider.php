<?php
namespace Ugc\Comment;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class IndexProvider extends ServiceProvider
{
    public function boot(Router $router)
    {
        $this->publishes([
            __DIR__.'/../config/comment.php' => config_path('comment.php'),
        ], 'config');

         $this->publishes([
            __DIR__.'/Middleware/Index.php' => app_path('Http/Middleware/Index.php'),
         ], 'middleware');

         $router->aliasMiddleware('commentlist', Middleware\Index::class);
    }

    public function register()
    {
        $this->app->singleton(Index::class, function() {
            return new Index();
        });

        $this->app->alias(Index::class, 'comment');
    }
}