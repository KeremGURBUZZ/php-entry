<?php

function ornek($sayi = null)
{
    if ($sayi == null) {
        echo "Sayı Belirtmediniz.";
    } elseif (!is_int($sayi)) {
        echo "Geçerli bir sayı değeri belirtiniz.";
    } else {
        for($i = 1; $i <= $sayi; $i++){
            echo "$i <br>";
        }
    }
}


ornek(20);