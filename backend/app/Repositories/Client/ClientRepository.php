<?php

namespace App\Repositories\Client;

use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Storage;

class ClientRepository extends CrudRepository implements ClientInterface
{
    public function checkIfFileExists(): bool
    {
        return Storage::disk('csv')->exists('clients.csv');
    }

    public function createFile(): bool
    {
        $csvFileName = 'clients.csv';
        $csvHeaders = "Name,Email";
        return Storage::disk('csv')->put($csvFileName, $csvHeaders);
    }
}
