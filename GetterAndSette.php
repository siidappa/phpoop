<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpansive(true);

echo "Name: {$category->getName()}" . PHP_EOL;
echo "Expansive: {$category->isExpansive()}" . PHP_EOL;