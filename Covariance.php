<?php

use Data\CatShelter;
use Data\Food\AnimalFood;
use Data\Food\Food;

require_once "Data/Animal.php";
require_once "Data/AnimalShelter.php";

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Clara");
$cat->eat(new AnimalFood);

$birdShelter = new \Data\BirdShelter();
$bird = $birdShelter->adopt("Asep");
$bird->eat(new Food);