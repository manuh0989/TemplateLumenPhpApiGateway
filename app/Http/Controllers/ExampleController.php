<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\ExampleService;

class ExampleController extends Controller
{
    use ApiResponse;

    public $exampleService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ExampleService $exampleService)
    {
        $this->exampleService = $exampleService;
    }
    public function index()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
