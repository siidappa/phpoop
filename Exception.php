<?php

require_once "Error/ValidationException.php";
require_once "Data/LoginRequest.php";
require_once "Helper/Validation.php";

$loginReq = new LoginRequest();
$loginReq->username = "";
$loginReq->password = "Dappa";

try {
    validateLoginRequest($loginReq);
} catch (ValidationException | Exception $exeption) {
    echo "ErrorMassage: {$exeption->getMessage()}" . PHP_EOL;
    echo $exeption->getTraceAsString() . PHP_EOL;
} finally {   
    echo "ERROR ATAU ENGGA ERROR BLOK INI AKAN DIEKSEKUSI" . PHP_EOL;
}
