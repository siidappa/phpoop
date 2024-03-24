<?php 

require_once "Data/ConflictTestNamespace.php";
require_once "Data/Helper.php";

// Mengakses namespace
$con1 = new \Data\One\Conflict();
$con2 = new \Data\Two\Conflict();

echo Hello\APP . PHP_EOL;
Hello\hello();