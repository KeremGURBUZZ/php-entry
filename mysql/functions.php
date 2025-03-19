<?php
// Sabitleri doğru şekilde tanımladık
define("DBHOST", "localhost");
define("DBNAME", "ilk_adım");
define("DBUSER", "root");
define("DBPASS", "");

try {
    // PDO bağlantısı sağlanıyor
    $db = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);
    // PDO hataları için istisna modunu etkinleştir
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    // Hata mesajı yazdır
    echo "Bağlantı hatası: " . $ex->getMessage();
}
?>
