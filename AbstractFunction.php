<?php

require_once "data/Animal.php";
use Data\{Animal, Cat, Bird};

$cat = new Cat();
$cat->name = "Meow";
$cat->run();

$bird = new Bird();
$bird->name = "Beo";
$bird->run();

