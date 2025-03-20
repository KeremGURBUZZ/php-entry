<?php
require_once 'functions.php';  

$baslik = "Bu bir başlıktır";
$aciklama = "Bu bir açıklamadır";
//VERİTABANI EKLEME İŞLEMLERİ

$insert = $db->prepare("INSERT INTO `haberler` (`baslik`, `aciklama`) VALUES (:baslik, :aciklama)");
$insert->bindValue(":baslik", $baslik, PDO::PARAM_STR);
$insert->bindValue(":aciklama", $aciklama, PDO::PARAM_STR);
if($insert->execute()){
    echo "Başarıyla eklendi";
}else {
    echo "Hata oluştu";
}
?>
