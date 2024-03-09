<?php 

require_once "data/ConflictTestNamespace.php";
require_once "data/Helper.php";

// import menggunakan metode use
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Hello\hello as say;
use const Hello\APP as app;

$c = new Conflict1();
$c2 = new Conflict2();

say();
echo app . PHP_EOL;