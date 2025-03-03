<?php

/*
DİZİLERDE SIRALAMA FONKSİYONLARI
sort:  [değer] küçükten büyüğe, key-value korunmaz
rsort: [değer] büyükten küçüğe, key-value korunmaz 
shuffle: rastgele, key-value korunmaz
asort: [değer] küçükten büyüğe, key-value korunur
arsort: [değer] büyükten küçüğe, key-value korunur
ksort: [key] küçükten büyüğe, key-value korunur
krsort: [key] büyükten küçüğe, key-value korunur
*/

$sayilar = array(
    "bir" => 1,
    "iki" => 2,
    "uc" => 3,
    "dort" => 4
);

krsort($sayilar);

print_r($sayilar);