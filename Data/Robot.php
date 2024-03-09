<?php 

class Robot {
    public function greet(): string {
        echo "Hii"; //Hii
    }
}

class Android extends Robot {
    final public function greet(): string {
        // $greeting = $this->greet();
        $greeting = parent::greet(); // mengakses function yang berada di class Parent menggunakan keyword parent::
        return $greeting . PHP_EOL;
    }
}