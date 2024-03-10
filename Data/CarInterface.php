<?php

namespace Data;

interface HasBrand {
    function getBrand(): string;
}

interface IsMaintenance {
    function isMaintenance(): bool;
}

interface CarInterface extends HasBrand {
    function drive(): void;
    function getTire(): int;
}

class Avanza implements CarInterface, IsMaintenance {
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        // TODO: Implement getBrand() method.
        return  "Toyota" . PHP_EOL;
    }

    public function isMaintenance(): bool
    {
        // TODO: Implement isMaintenance() method.
        return false;
    }
}