<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class ExampleService
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.example.base_uri');
    }

    public function getExamples()
    {
        return $this->performRequest('GET', '/examples');
    }
}
