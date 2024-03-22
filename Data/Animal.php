<?php

namespace Data;

use Data\Food\AnimalFood;
use Data\Food\Food;

require_once "Food.php";

abstract class Animal {
    public  string $name;
    abstract public function  run(): void; //Abstract function
    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal {
    public function run(): void
    {
        echo "Cat {$this->name} is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Bird extends Animal{
    public function run(): void
    {
        echo "This Bird {$this->name} is Flying" . PHP_EOL;
    }

    // Contravariance
    public function eat(Food $animalFood): void
    {
        echo "Bird is eating a protein" . PHP_EOL;
    }
}