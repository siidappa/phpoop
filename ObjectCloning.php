<?php 

require_once "data/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Dappa";
$student->value = true;
$student->setSample("XXX");

$student2 = clone $student;
$student2->name = "Naufal";

var_dump($student);
var_dump($student2);
// Cara manual clone (Ribetttt)
// $student3 = new Student();
// $student3->id = $student->id;
// $student3->name = $student->name;
// $student3->value = $student->value;