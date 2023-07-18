<?php

namespace App\DataImporter\Importer;

class CsvImporter
{
    private string $fileToTest;

    public function __construct(string $fileToTest)
    {
        $this->fileToTest = $fileToTest;
    }

    public function getFile(): string
    {
        return $this->fileToTest;
    }
}
