<?php 

require_once "data/Programmer.php";

$company = new Startup();
$company->programmer = new Programmer("Dappa");
var_dump($company);

$company->programmer = new BE("Imam Rosnanto");
var_dump($company);

$company->programmer = new FE("Eko");
var_dump($company);

$company->programmer = new DEVOPS("Dappa");
var_dump($company);