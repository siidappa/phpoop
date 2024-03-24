<?php 

require_once "Data/LoginRequest.php";

function validateLoginRequest(LoginRequest $validateRequest) {
    if (!isset($validateRequest->username)) {
        throw new ValidationException("Username is null");
    } else if (!isset($validateRequest->password)) {
        throw new ValidationException("Password is null");
    } else if ($validateRequest->username == "") {
        throw new Exception("Nama kosong");
    } else if ($validateRequest->password == "") {
        throw new Exception("Password kosong");
    }
}