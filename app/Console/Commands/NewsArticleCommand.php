<?php

namespace App\Console\Commands;

use App\Services\Article\InsertDataArticleService;
use App\Services\Article\WebSite\NewsApiArticleService;
use Illuminate\Console\Command;

class NewsArticleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:news-article-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(InsertDataArticleService $insertDataArticleService, NewsApiArticleService $newsArticleService)
    {
        $insertDataArticleService->handel($newsArticleService);
    }
}
