<?php

namespace App\Repositories\Client;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Crud\CrudRepository;

class ClientRepository extends CrudRepository implements ClientInterface
{
    public function checkIfFileExists(): bool
    {
        return Storage::disk('csv')->exists('clients.csv');
    }

    public function createFile($client): bool
    {
        $csvHeaders = [];
        foreach ($client as $key => $value) {
            $csvHeader = str_replace('_', ' ', ucfirst($key));
            $csvHeaders[] = $csvHeader;
        }
        $csvHeaders = implode(',', $csvHeaders);
        $csvFileName = 'clients.csv';
        return Storage::disk('csv')->put($csvFileName, $csvHeaders);
    }
}
