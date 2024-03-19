<?php

class Data implements IteratorAggregate {
    var string $first = "First";
    public string $second = "SEcond";
    private string $third = "Third";
    protected string $four = "Fourth";

    // Menggunakan motede Iterator Manual
    public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->four
        ];

        return new ArrayIterator($array);
    }

    // Menggunakan Generator Operator (yield)
    public function getIterators(): Traversable
    {
       yield "first" => $this->first;
       yield "second" => $this->second;
       yield "third" => $this->third;
       yield "fourth" => $this->four;
    }
}

$data = new Data();
foreach($data as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}