<?php

function faktoriyel($sayi){
    if($sayi == 0){
        return 1;
    }

    return $sayi * faktoriyel($sayi - 1);
}

echo faktoriyel(5);