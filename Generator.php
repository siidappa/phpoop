<?php 

function getGenap(int $max): Iterator {
    $array = [];

    for ($j = 1; $j <= $max; $j++) {
        if ($j % 2 == 0) {
            $array[] = $j;
        }
    }

    return new ArrayIterator($array);
}

foreach (getGenap(100) as $value) {
    echo "Genap: $value" . PHP_EOL;
}

function getGanjil(int $max): Iterator{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getGanjil(100) as $value) {
    echo "Ganjil: $value" . PHP_EOL;
}