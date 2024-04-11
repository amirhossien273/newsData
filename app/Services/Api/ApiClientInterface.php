<?php

namespace App\Services\Api;

interface ApiClientInterface
{
    public function get(string $url, array $params = []): array;

    public function post(string $url, array $data = []): array;

}