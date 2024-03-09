<?php 

class Person {
    const AUTHOR = "Dappa Naufal"; //defined constanta in Class

    var string $name; // properties ditambahkan setelah keyword var
    var ?string $address; // value diperbolehkan null berkat nullable
    var string $country = "Indonesia"; // Nilai Default

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function __destruct()
    {
        echo "Object Person {$this->name} destroyed" . PHP_EOL;
    }

    function sayHello(?string $name){
        if (is_null($name)) {           //mengakses object saat ini menggunakan keyword $this
            echo "Hello, Selamat datang {$this->name}" . PHP_EOL;
        } else {
            echo "Hai $name, My name is {$this->name}" . PHP_EOL;
        }
    }

    function info() {         //keyword self untuk mengakses class saat ini
        echo "The author: " . self::AUTHOR . PHP_EOL;
    }                        // mirip seperti keyword this namun kalau this itu untuk object yang sama
                             // sedangkan untuk self itu class yang sama
}