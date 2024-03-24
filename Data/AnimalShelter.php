<?php 

namespace Data;
require_once "Data/Animal.php";

interface AnimalShelter {
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter {
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class BirdShelter implements AnimalShelter {
    public function adopt(string $name):  Bird
    {
        $bird = new Bird();
        $bird->name = $name;
        return $bird;
    }
}