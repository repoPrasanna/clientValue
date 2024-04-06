
<?php

namespace App\Repositories\Client;


use App\Repositories\Crud\CrudRepository;
use Illuminate\Support\Facades\Storage;

class ClientRepository extends CrudRepository implements ClientInterface
{
    public function checkIfFileExists(): bool
    {
        return Storage::disk('csv')->exists('partners.csv');
    }

    public function createFile(): bool
    {
        // if (!$this->checkIfFileExists()) {
        //     $csv = Writer::createFromString('');
        //     $csv->insertOne(['Name', 'Email']);
        //     $csvContent = $csv->toString();
        //     Storage::disk('csv')->put('partners.csv', $csvContent);
        // }
        return true;
    }

    public function fetchAllPartners(): void
    {
        // $filePath = Storage::disk('csv')->path('partners.csv');
        // $reader = Reader::createFromPath($filePath, 'r');
        // $results  = $reader->getRecords(['Name', 'Email']);
        // $partners = iterator_to_array($results, false);

        // return $partners; // returns array
    }

    public function appendToFile($partnerData): void
    {
        // $csv = Writer::createFromString('');
        // $csv->insertAll($partnerData);
        // $csvContent = $csv->toString();
        // Storage::disk('csv')->put('partners.csv', $csvContent);
        // return $csvContent; // returns string
    }
}
