<?php 

interface HelloWorld {
    function sayHello(): void;
}

// Anonymous function = membuat class sekaligus membuat objek nya
$helloWorld = new class("Eko") implements HelloWorld {
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello {$this->name}" . PHP_EOL;
    }
};
$helloWorld->sayHello();

// class SampeHelloWorld implements HelloWorld {
//     public function sayHello(): void
//     {
//         echo "Hello World" . PHP_EOL;
//     }
// }
// $hello = new SampeHelloWorld();
// $hello->sayHello();