<form action="" method="POST">
    Ad-Soyad: <input type="text" name="adsoyad" required> <br>
    E-mail: <input type="email" name="email" required> <br>
    Başlık: <input type="text" name="baslik" required> <br>
    Mesajınız: <textarea name="mesaj" cols="30" rows="10"></textarea> <br>
    <input type="submit" name="submit" value="Gönder">
</form>

<hr>

<?php
error_reporting(0);
if (@$_POST["submit"]) { // Büyük harf hatası düzeltildi
    $email = $_POST["email"];
    $baslik = $_POST["baslik"];
    $mesaj = $_POST["mesaj"] . "\n\nAd-Soyad: " . $_POST["adsoyad"]; // Mesaj sonuna ad-soyad ekleme düzeltildi
    $headers = "From: kerem@gurbuz.com"; // "from:" yerine "From:" kullanıldı

    $sonuc = mail($email, $baslik, $mesaj, $headers);
    if ($sonuc) {
        echo "Başarıyla gönderildi";
    } else {
        echo "Mesaj gönderilirken hata oluştu";
    }
}
?>
