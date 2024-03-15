<?php 

require_once "data/SayGoodBye.php";

use Data\Trait\{Person, HasName, CanRun, SayGoodBye, SayHello};
$person = new Person();
$person->goodBye("Dappa");
$person->hello("Naufal");

$person->name = "Imam Rosnanto";
var_dump($person);

$person->run();