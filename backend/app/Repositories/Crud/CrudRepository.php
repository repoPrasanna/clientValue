<?php

namespace App\Repositories\Crud;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

abstract class CrudRepository implements CrudInterface
{
    public function store($client): JsonResponse
    {
        $csvFileName = 'clients.csv';
        $csvContent = $client['name'].",".$client['email'];
        Storage::disk('csv')->append($csvFileName, $csvContent);

        return response()->json(['data' => $csvContent]);
    }
}
