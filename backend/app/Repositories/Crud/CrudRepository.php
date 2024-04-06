<?php

namespace App\Repositories\Crud;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

abstract class CrudRepository implements CrudInterface
{
    public function store($client): JsonResponse
    {
        $csvContent = [];
        foreach ($client as $key => $value) {
            $csvContent[] = $value;
        }
        $csvContent = implode(',', $csvContent);
        $csvFileName = 'clients.csv';
        Storage::disk('csv')->append($csvFileName, $csvContent);

        return response()->json(['data' => $csvContent]);
    }
}
