<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML ++ PHP</title>
</head>

<body>

    <h1>Resim Yükle</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"> <br>
        <input type="submit" name="submit">
    </form>
    <hr>

    <?php
    if (@$_POST["submit"]) {
        if ($_FILES["file"]["size"] > 0) {
            // "uploads" klasörü yoksa oluştur
            if (!is_dir("uploads")) {
                mkdir("uploads", 0777, true);
            }

            $uzanti = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); // jpg, png

            if ($uzanti == "jpg" || $uzanti == "png") {
                $yeniAd = "uploads/" . uniqid() . "." . $uzanti;

                if (move_uploaded_file($_FILES["file"]["tmp_name"], $yeniAd)) {
                    echo "Başarıyla yüklendi";
                    echo "<br><img src='$yeniAd' width='200'>";
                } else {
                    echo "Dosya yüklenirken bir hata meydana geldi!";
                }
            } else {
                echo "Sadece JPG ve PNG formatındaki dosyalar yüklenebilir!";
            }
        } else {
            echo "Dosya seçimi yapınız";
        }
    } else {
        echo "Tıklanmadı";
    }
    ?>
</body>

</html>
