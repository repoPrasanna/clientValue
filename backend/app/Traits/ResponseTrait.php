<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseTrait
{
    public function responseSuccess($data, $message = 'Successful'): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
        ]);
    }

    public function responseError(): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => 'Something went wrong. Please try again later.',
            'data' => null,
        ]);
    }
}
