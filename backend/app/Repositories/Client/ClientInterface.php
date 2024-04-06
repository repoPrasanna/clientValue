<?php

namespace App\Repositories\Client;

interface ClientInterface
{
    public function checkIfFileExists(): bool;

    public function createFile(): bool;
}
