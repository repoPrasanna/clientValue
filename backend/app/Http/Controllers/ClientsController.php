<?php

namespace App\Http\Controllers;

use Exception;
use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreClientRequest;
use App\Repositories\Client\ClientInterface;

class ClientsController extends Controller
{
    use ResponseTrait;

    private $clientRepository;

    public function __construct(ClientInterface $clientRepository) {
        $this->clientRepository = $clientRepository;
    }

    public function index(): JsonResponse
    {
        try {
            return $this->responseSuccess($this->clientRepository->all(), 'Partners fetched successfully.');
        } catch (Exception $e) {
            Log::info($e->getMessage() . ' | File: ' . __FILE__ . ' | Line: ' . __LINE__);
            return $this->responseError();
        }
    }

    public function store(StoreClientRequest $request)
    {
        try {
            return $this->responseSuccess($this->clientRepository->store($request->all()), 'Partners added successfully.');
        } catch (Exception $e) {
            Log::info($e->getMessage() . ' | File: ' . __FILE__ . ' | Line: ' . __LINE__);
            return $this->responseError();
        }
    }
}
