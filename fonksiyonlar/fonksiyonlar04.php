<?php

$metin = "merhaba ben Kerem";

/*     strstr => metinde bu harf var mı yok mu onu söyler
if (strstr($metin, "k")) {
    echo "var";
} else {
    echo "yok";
}
*/



//                   strlen metnini uzunluğunu söyler
//echo strlen($metin);


//             substr  metnin içinde hangi metin oldudğunu , başlangıç  ve ,bitişi gösterir
//echo substr($metin,5,10);
//  "Merhaba ben Kerem" -> bu metnin=$metin, 5-> beşinci harften sonrasını =ba , 10. harfte bitir.
// çıktı -> ba ben ker


//    str_replace değişkenin içindeki metni değiştirmemize yarar
//echo str_replace("Kerem","Çağla",$metin); -> Kerem i Çağla olarak değiştirdik



//Metini büyütmemize yarar.
//echo strtoupper($metin);

// metni küçültmemize yarar.
//echo strtolower($metin);



echo ucfirst($metin);