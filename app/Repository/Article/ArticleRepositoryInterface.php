<?php

namespace App\Repository\Article;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ArticleRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $articleDTO);
}