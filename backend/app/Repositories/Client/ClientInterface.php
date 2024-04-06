<?php

namespace App\Repositories\Client;

interface ClientInterface
{
    public function appendToFile($partnerData): string;

    public function checkIfFileExists(): bool;

    public function createFile(): bool;

    public function fetchAllPartners(): array;
}
