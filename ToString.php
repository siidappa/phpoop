<?php 

require_once "Data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Dappa";
$student1->value = 100;

$student1(1, "Dappa", 100);

$str = (string)$student1;
echo $str . PHP_EOL;