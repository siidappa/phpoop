<?php 

require_once "data/Person.php";

$personClass = new Person("Eko", "Bekasi");
$personClass->name = "Eko";
$personClass->sayHello("Dappa");

$personClass = new Person("Dappa", null);
$personClass->name = "Joko";
$personClass->sayHello(null);

$personClass->info();