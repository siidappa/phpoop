<?php 
require_once "data/Person.php";

const APP_VERSION = "1.0.0";
echo APP_VERSION . PHP_EOL;

// Mengakses constanta yang tertempel di Class
echo Person::AUTHOR . PHP_EOL;