<?php 

namespace Data\Trait;

trait SayGoodBye{
    public function goodBye(?string $name): void {
        if (is_null($name)):
            echo "Good Byee" . PHP_EOL;
        else: 
            echo "Good Bye $name" . PHP_EOL;
        endif;
    }
}

trait SayHello {
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName {
    public string $name;
}

trait CanRun {
    public abstract function run(): void;
}

trait ALL {
    use HasName, SayHello, SayGoodBye, CanRun;
    // Bisa di Overide
    // hello as private;
    // goodBye as private;
}

class ParentPerson {
    public function goodBye(?string $name): void
    {
        echo "Good Bye int Person" . PHP_EOL;
    }
    public function hello(?string $name): void
    {
        echo "Hello int Person" . PHP_EOL;
    }
}

class Person extends ParentPerson {
    use ALL; // Trait Inheritence
    public function run(): void {
        echo "Person {$this->name} Can runn...." . PHP_EOL;
    }
}