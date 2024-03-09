<?php 

require_once "data/Manager.php";

$president = new President();
$president->name = "Dappa";
$president->sayHello("Eko");

$vp = new VicePresident();
$vp->name = "Naufal";
$vp->sayHello("Dappa");