<?php

namespace App\Repositories\Crud;

use Illuminate\Http\JsonResponse;

interface CrudInterface
{
    public function all(): JsonResponse;

    public function store($data): string;
}
