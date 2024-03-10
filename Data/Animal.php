<?php

namespace Data;
abstract class Animal {
    public  string $name;
    public  abstract function  run(): void; //Abstract function
}

class Cat extends Animal {
    public function run(): void
    {
        echo "Cat {$this->name} is running" . PHP_EOL;
    }
}

class Bird extends Animal{
    public function run(): void
    {
        echo "This Bird {$this->name} is Flying" . PHP_EOL;
    }
}