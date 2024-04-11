<?php

namespace App\Services\Article;

use App\Repository\Article\ArticleRepositoryInterface;

class InsertDataArticleService
{
    private $articleRepository;
    
    private $articleService;

    public function __construct(ArticleRepositoryInterface $articleRepository, ArticleService $articleService)
    {
        $this->articleRepository = $articleRepository;
        $this->articleService = $articleService;
    }

    public function handel(ArticleServiceInterface $articleServiceInterface) 
    {
        return $this->articleRepository->insert(
            $this->articleService->handel($articleServiceInterface)->geListData()
        );
    }

}