<?php

namespace App\Repository\Article;

use App\DTO\ArticleDTO;
use App\Models\Article;
use App\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ArticleRepository extends BaseRepository implements ArticleRepositoryInterface
{

   /**
    * ArticleRepository constructor.
    *
    * @param Article $model
    */
   public function __construct(Article $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();    
   }

   public function insert(array $articleDTO)
   {
      return $this->model->insert($articleDTO);
   }

}