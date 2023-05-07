<?php

namespace ChrisHolland\DataImporter\Test;

use ChrisHolland\DataImporter\Importer\CsvImporter;
use PHPUnit\Framework\TestCase;

class ImporterTest extends TestCase
{
    private const TEST_FILE = './tests/AAA1-Customers.csv';

    public function testFileHandling(): void
    {
        $this->getFileToTest();
    }

    public function testImportData(): void
    {
        $importer = new CsvImporter(
            $this->getFileToTest()
        );

        self::assertSame(self::TEST_FILE, $importer->getFile());
    }

    private function getFileToTest(): string
    {
        $file = self::TEST_FILE;
        self::assertFileExists($file);
        return $file;
    }
}
