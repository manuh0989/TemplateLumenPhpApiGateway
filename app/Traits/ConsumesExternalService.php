<?php

namespace App\Traits;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

trait ConsumesExteralService
{
    public function performRequest($method, $requestUrl, $formParams = [], $headers  = [])
    {
        $client = new Client([
            'base_url' => $this->baseUri,
        ]);

        $response = $client->request($method, $requestUrl, [
            'form_params'   => $formParams,
            'headers'       => $headers,
        ]);

        return $response->getBody()->getContents();
    }
}
