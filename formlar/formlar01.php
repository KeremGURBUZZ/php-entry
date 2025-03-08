<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML + PHP</title>
</head>

<body>

    <form action="" method="POST">

        <input type="text" name="ad" placeholder="Adınızı girin"> <br>
        <input type="text" name="soyad" placeholder="Soyadınızı girin"> <br>
        Erkek <input type="radio" name="cinsiyet" value="erkek"> <br>
        Kadın <input type="radio" name="cinsiyet" value="kadın"> <br>
        <input type="email" name="email" placeholder="example@email.com"> <br>

        <select name="gun">

            <?php for ($i = 1; $i <= 31; $i++)
                echo '<option value=" ' . $i . ' ">' . $i . '</option>'
                    ?>

            </select>
        <?php $aylar = array(
                "Ocak",
                "Şubat",
                "Mart",
                "Nisan",
                "Mayıs",
                "Haziran",
                "Temmuz",
                "Ağustos",
                "Eylül",
                "Ekim",
                "Kasım",
                "Aralık"
            );
            ?>
        <select name="ay" id="">
            <?php foreach ($aylar as $ay)
                echo '<option value="' . $ay . '">' . $ay . '</option>'
                    ?>
            </select>
            <select name="yil">

            <?php for ($i = 1900; $i <= date("Y"); $i++)
                echo '<option value=" ' . $i . ' ">' . $i . '</option>'
                    ?>
            </select>

            <br><br>

            <input type="submit" name="kaydet" value="Kaydet">
            <input type="reset" name="temizle" value="Temizle">

        </form>

        <hr>

        <?php

            // eğer kaydet tıklandıysa
            if (@$_POST["kaydet"]) {
                echo
                    "Ad: <b>$_POST[ad]</b><br>
          Soyad: <b>$_POST[soyad]</b><br>
          Cinsiyet: <b>$_POST[cinsiyet]</b><br>
          Email: <b>$_POST[email]</b><br>
          Doğum: <b>$_POST[gun]/$_POST[ay]/$_POST[yil]</b><br>
          ";  
          } else {
                echo 'tiklanmadi';
            }

            ?>

</body>

</html>