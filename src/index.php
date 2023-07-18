<?php

use ChrisHolland\DataImporter\Importer\CsvImporter;

require_once 'vendor/autoload.php';

$importer = new CsvImporter(
    $argv[1]
);

echo 'processing file:'.$importer->getFile();
//add any output you wish
