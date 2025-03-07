<?php

$sayi1 = 25;
$sayi2 = 20;

function topla($a){
    global $sayi1,$sayi2;
    return $a + $sayi1 + $sayi2;
}

echo topla(10);