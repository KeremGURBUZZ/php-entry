<?php
session_start();

// Kullanıcı oturum açmamışsa giriş sayfasına yönlendir
if (!isset($_SESSION["kadi"])) {
    header("Location: session02.php"); 
    exit;
}

echo "Başarıyla giriş yaptın: <b>" . $_SESSION["kadi"] . "</b>";
?>

<br>
<a href="cikis.php">Çıkış Yap</a>
