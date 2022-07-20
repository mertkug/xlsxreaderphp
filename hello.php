<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use \PhpOffice\PhpSpreadsheet\Writer\Csv;

$filename = "Example2.xlsx";
$extension = pathinfo($filename, PATHINFO_EXTENSION);

if('xls' == $extension) {
    $reader = new Xls();
} else
    $reader = new Xlsx();


$spreadsheet = $reader->load($filename);


$loadedSheetNames = $spreadsheet->getSheetNames();

$writer = new Csv($spreadsheet);

foreach($loadedSheetNames as $sheetIndex => $loadedSheetName) {
    $writer->setSheetIndex($sheetIndex);
    $writer->save($loadedSheetName.'.csv');
}


