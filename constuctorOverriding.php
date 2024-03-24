<?php 

require_once "Data/Manager.php";

$president = new President();
$president->name = "Dappa";
$president->sayHello("Eko");

$vp = new VicePresident();
$vp->name = "Naufal";
$vp->sayHello("Dappa");