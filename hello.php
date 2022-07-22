<?php

require_once 'vendor/autoload.php';
use \Convertio\Convertio;

$API = new Convertio("36fd8c173d1435176ae18fb015f07f1b");

$API->start('./Example.xls', 'csv')   // Convert (Render) HTML Page to PNG
->wait()                                          // Wait for conversion finish
->download('./google.csv');                        // Download Result To Local File