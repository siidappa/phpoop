<?php 

$dateTime = new DateTime();
$dateTime->setDate(2024, 3, 22);
// Menambah 1 Tahub (P) -> Periode
$dateTime->add(new DateInterval("P1Y"));

$minusOneM = new DateInterval("P1M");
$minusOneM->invert = 1;
$dateTime->add($minusOneM);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini {$string}" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "salah", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "Format Inputan Salah" . PHP_EOL;
}