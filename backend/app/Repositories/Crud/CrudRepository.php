
<?php

namespace App\Repositories\Crud;

use Illuminate\Http\JsonResponse;

abstract class CrudRepository implements CrudInterface
{
    public function all(): JsonResponse
    {
        $partners = $this->fetchAllPartners();

        return response()->json(['data' => $partners]);
    }

    public function store($data): string
    {
        $this->createFile();
        $partners = $this->fetchAllPartners();
        $partners[] = $data;
        $this->appendToFile($partners);

        return response()->json(['data' => $data]);
    }
}
