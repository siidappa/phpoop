<?php 

class Zero {
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }
}

$output = new Zero();
$output->firsname = "Dappa";
$output->middlename = "Naufal";

echo "FirstName: {$output->firsname}" . PHP_EOL;
echo "MiddleName: {$output->middlename}" . PHP_EOL;

$output->sayHello("Dappa", "Naufal");
Zero::sayHello("Dappa", "Naufal");