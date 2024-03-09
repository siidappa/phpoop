<?php 

require_once "data/ConflictTestNamespace.php";
require_once "data/Helper.php";

// Import menggunakan metode grup use
use Data\One\{Conflict as C1, Dami as Dummy, Sample as Sam};
use function Hello\{hello};