<?php

use ProductData\Product;
use ProductData\ProductDummy;

require_once "Data/Product.php";

$product = new Product("Pisang", 12000);
echo "Name: {$product->getName()}, Price: {$product->getPrice()}" . PHP_EOL;

$dumm = new ProductDummy("Apel", 19000);
$dumm->info();