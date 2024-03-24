<?php 

require_once "Data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Dappa";
$student1->value = 100;

$student2 = new Student();
$student2->id = "2";
$student2->name = "Naufal";
$student2->value = 100;

var_dump($student1 == $student2); // Return => bool(true)
var_dump($student1 === $student2); // Return => bool(false)
var_dump($student1 === $student1); // Return => bool(true)