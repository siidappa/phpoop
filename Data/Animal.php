<?php

namespace Data;
abstract class Animal {
    public  string $name;
    public  abstract function  run(): void;
}

class Cat extends Animal {
    public function run(): void
    {
        echo "Cat {$this->name} is running" . PHP_EOL;
    }
}

$cat = new Cat("Dappa");
