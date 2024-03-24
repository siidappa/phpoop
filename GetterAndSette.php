<?php

require_once "Data/Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpansive(true);

echo "Name: {$category->getName()}" . PHP_EOL;
echo "Expansive: {$category->isExpansive()}" . PHP_EOL;