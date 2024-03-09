<?php 

require_once "data/Person.php"; // include file

$person = new Person(); // Instansiasi
$person->name = "Dappa";
$person->address = "Bekasi";

echo "Nama {$person->name}" . PHP_EOL;
echo "Alamat {$person->address}" . PHP_EOL;
echo $person->sayHello("siidappa"); // mengakses function dalam object
var_dump($person);
