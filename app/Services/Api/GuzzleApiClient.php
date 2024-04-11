<?php

namespace App\Services\Api;

use GuzzleHttp\Client;

class GuzzleApiClient implements ApiClientInterface
{
    private $httpClient;

    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function get(string $url, array $params = []): array
    {
        try{
            $response = $this->httpClient->get($url, ['query' => $params]);
            return json_decode($response->getBody()->getContents(), true);
        } catch(\Exception $exception){
            dd($exception);
            throw new \RuntimeException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    public function post(string $url, array $data = []): array
    {
        $response = $this->httpClient->post($url, ['json' => $data]);
        return json_decode($response->getBody()->getContents(), true);
    }
}