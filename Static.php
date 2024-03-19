<?php 

require_once "Helper/MathHelper.php";

use Helper\MathHelper;
// $mathelper = new MathHelper();
// echo $mathelper->name.PHP_EOL;

echo MathHelper::$name . PHP_EOL;
MathHelper::$name = "Dappa";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10,10,10,10,10);
echo "Result: $result" . PHP_EOL;