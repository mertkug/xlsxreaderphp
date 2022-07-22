<?php

require_once 'vendor/autoload.php';
use \Convertio\Convertio;

$API = new Convertio("");

$API->start('./Example.xls', 'csv')   // Convert (Render) HTML Page to PNG
->wait()                                          // Wait for conversion finish
->download('./google.csv');                        // Download Result To Local File
