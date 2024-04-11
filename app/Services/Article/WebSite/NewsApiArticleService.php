<?php

namespace App\Services\Article\WebSite;

use App\Consts\Consts;
use App\DTO\ArticleDTO;
use App\Services\Api\ApiClientInterface;
use App\Services\Article\ArticleServiceInterface;
use Carbon\Carbon;
use Illuminate\Support\Str;

class NewsApiArticleService implements ArticleServiceInterface
{

    private $guzzleHttp;


    public function __construct(ApiClientInterface $apiClientInterface)
    {
        $this->guzzleHttp = $apiClientInterface;

    }

    /**
    * @return array<ArticleDTO>
    */
    public function geListData(): array
    {
        $articleData = $this->guzzleHttp->get(Consts::NEWS_URL, [
            "apiKey" => Consts::NEWS_APIKET,
            "sortBy" => Consts::NEWS_FROM,
            "from"   => Consts::NEWS_Q,
            "q"      => Consts::NEWS_SORTBY,
        ]);

        $articleDTO = [];
        foreach($articleData['articles'] as $article) {
            $articleDTO[] = [
                'id'           => Str::uuid(),
                'website'      => Consts::NEWS,
                'title'        => $article["title"],
                'author'       => $article["author"],
                'url'          => $article["url"],
                'imag'         => $article["urlToImage"],
                'description'  => $article["description"],
                'published_at' =>  Carbon::parse($article["publishedAt"]),
                'created_at'   =>  Carbon::now(),
                'updated_at'   =>  Carbon::now(),
            ];
        }
        return $articleDTO;

    }
}
