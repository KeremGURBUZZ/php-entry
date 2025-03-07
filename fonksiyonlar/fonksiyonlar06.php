<?php

date_default_timezone_set("Europe/Istanbul");
setlocale(LC_ALL, "turkish");

//echo time();
//echo date("Y-m-d H:i:s");

$tarih = "2018-10-12 12:10:00";
$unix = "1539335400";

//echo strtotime($tarih);

echo strftime("%A (%d) %B %Y - %H:%M:%S "  , $unix);
