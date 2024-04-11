<?php

namespace App\Http\Controllers;

use App\Services\Article\ArticleServiceInterface;
use App\Services\Article\InsertDataArticleService;
use App\Services\Article\WebSite\NewsApiArticleService;
use Illuminate\Http\Request;

class NewsArticleController extends Controller
{
    public function __invoke(InsertDataArticleService $insertDataArticleService, NewsApiArticleService $newsArticleService)
    {
        
        $insertDataArticleService->handel($newsArticleService);
        return redirect()->back()->with("success", "Insert Articles Successfuly!");

    }
}
