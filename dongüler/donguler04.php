<?php

$sayi = 0;
$toplam = 0;

while ($sayi < 10){
    echo $sayi . "<br>";
    $toplam += $sayi; //--> $toplam = $toplam + $sayi;
    $sayi++;
}

echo "<hr>Toplam: $toplam";