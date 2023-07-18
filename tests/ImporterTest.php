<?php

namespace App\DataImporter\Test;

use App\DataImporter\Importer\CsvImporter;
use PHPUnit\Framework\TestCase;

class ImporterTest extends TestCase
{
    private const TEST_FILE = './tests/AAA1-Customers.csv';
    private const DB_FILE = './serviceline.db';

    public function testFileHandling(): void
    {
        $this->getFileToTest();
        fopen(self::DB_FILE, 'wb');
        self::assertFileExists(self::DB_FILE);
    }

    public function testImportData(): void
    {
        $importer = new CsvImporter(
            $this->getFileToTest()
        );

        self::assertSame(self::TEST_FILE, $importer->getFile());
        self::assertFileExists($importer->getFile());
    }

    private function getFileToTest(): string
    {
        $file = self::TEST_FILE;
        self::assertFileExists($file);
        return $file;
    }
}
