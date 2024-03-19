<?php

namespace Helper;

class MathHelper {
    static public string $name = "MathHelper";

    static public function sum(int... $numbers): int {
        $total = 0;
        foreach($numbers as $num) {
            $total += $num;
        }
        return $total;
    }
}