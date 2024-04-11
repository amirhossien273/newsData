<?php

namespace App\Providers;

use App\Http\Controllers\NewsArticleController;
use App\Services\Article\ArticleService;
use App\Services\Article\ArticleServiceInterface;
use App\Services\Article\WebSite\NewsApiArticleService;
use Illuminate\Support\ServiceProvider;

class ArticleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // $this->app->when(ArticleService::class)
        // ->needs(ArticleServiceInterface::class)
        // ->give(NewsApiArticleService::class);

    }
}
