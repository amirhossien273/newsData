<?php

namespace App\Services\Article;

use App\DTO\ArticleDTO;

/**
* Interface InsertArticleServiceInterface
* @package App\Services\Article
*/

interface ArticleServiceInterface
{
    /**

     * @return array<ArticleDTO>
     */
    public function geListData() : array; 
}