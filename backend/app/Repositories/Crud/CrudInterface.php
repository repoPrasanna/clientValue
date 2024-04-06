<?php

namespace App\Repositories\Crud;

use Illuminate\Http\JsonResponse;

interface CrudInterface
{

    public function store($data): JsonResponse;
}
