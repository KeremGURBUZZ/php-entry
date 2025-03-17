<?php

session_start();
$_SESSION["isim"] = "Kerem";
$_SESSION["soyad"] = " Gürbüz";
$_SESSION["üyeler"] = array("Kerem", "Çağla", "Mehmet");

//unset($_SESSION["soyad"]); 
//echo $_SESSION["soyad"];

//session_destroy();

//echo "Hoşgeldin: <b>$_SESSION[isim]$_SESSION[soyad]</b>";


?>
