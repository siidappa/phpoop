<?php

class SocialMedia {
    public string $name;
}

class FaceBook extends SocialMedia {
    final public function login(string $email, string $password): void {
        echo "Loginedd" . PHP_EOL;
    }
}

// eror
class WhatsApp extends SocialMedia {
    //Tidak bisa di Override karna sudah final di class FaceBook
    public function login(string $email, string $password): void {
        echo "Error" . PHP_EOL;
    }
}