<?php

$not = 90;

if ($not >= 70 && $not <= 100) {
    echo 'Notunuz: Pekiyi';
} 
else if ($not >= 45 && $not < 70) {
    echo 'Notunuz: İyi';
} 
else if ($not >= 0 && $not < 45) {
    echo 'Notunuz: Zayıf';
} 
else {
    echo 'Geçersiz not girdiniz!';
}