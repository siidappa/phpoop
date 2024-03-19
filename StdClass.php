<?php 

$array = [
    "firstname" => "Dappa",
    "lastname" => "Naufal"
];

$objek = (object)$array; // otomatis di konversi ke stdCLass
var_dump($objek);

echo "FirstName: $objek->firstname" . PHP_EOL;