<?php

namespace App\Services\Article\WebSite;

use App\Consts\Consts;
use App\Services\Api\ApiClientInterface;
use App\Services\Article\ArticleServiceInterface;
use Carbon\Carbon;
use Illuminate\Support\Str;

class GuardianApiArticleService implements ArticleServiceInterface
{

    private $guzzleHttp;


    public function __construct(ApiClientInterface $apiClientInterface)
    {
        $this->guzzleHttp = $apiClientInterface;

    }

    /**
    * @return array
    */
    public function geListData(): array
    {
        $articleData = $this->guzzleHttp->get(Consts::GUARDIAN_URL, [
            "api-key" => Consts::GUARDIAN_APIKET
        ]);

        $articleDTO = [];
        foreach($articleData["response"]['results'] as $article) {
            $articleDTO[] = [
                'id'           => Str::uuid(),
                'website'      => Consts::GUARDIAN,
                'title'        => $article["webTitle"],
                'url'          => $article["webUrl"],
                'description'  => $article["webTitle"],
                'published_at' =>  Carbon::parse($article["webPublicationDate"]),
                'created_at'   =>  Carbon::now(),
                'updated_at'   =>  Carbon::now(),
            ];
        }
        return $articleDTO;

    }
}
