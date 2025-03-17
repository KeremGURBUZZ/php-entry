<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
</head>

<body>

    <form action="" method="POST">
        <input type="text" name="username" placeholder="Kullanıcı Adı" required> <br>
        <input type="password" name="password" placeholder="******" required> <br><br>

        <input type="submit" name="submit" value="Giriş Yap">
    </form>

    <?php
    if (@$_POST["submit"]) {
        if ($_POST["username"] == "kerem" && $_POST["password"] == 1234) {
            echo "Giriş Başarılı";
            $_SESSION["kadi"] = $_POST["username"];
            header("Location: uye02.php");
        } elseif ($_POST["username"] == "kerem" && $_POST["password"] != 1234) {
            echo "Şifre Hatalı!";
        } else {
            echo "Kullanıcı Adı Veya Şifre Hatalı Lütfen Tekrar deneyiniz..";
        }
    }
    ?>

</body>

</html>