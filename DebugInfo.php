<?php 

require_once "Data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Dappa";
$student1->value = 100;
$student1->setSample("PT. KERETA API INDONESIA");

// $student1();
var_dump($student1);