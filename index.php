<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "kitap_php";

    $baglanti = mysqli_connect($host,$username,$password,$database);
    $quary = "SELECT * from kitaplar";
    $result = mysqli_query($baglanti, $quary);
    $tum_kitaplar = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($baglanti);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kitap html</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div class="header">
        <div class="baslik bosluk">Kitap_HTML</div>
        <div class="anasayfa bosluk">Anasayfa</div>
        <div class="kitaplar bosluk">Tüm Kitaplar</div>
    </div>
    <div class="tum_kitaplar">
        <?php foreach($tum_kitaplar as $kitap): ?>
            <a href = "kitap_detay.php?id=<?php echo $kitap["id"]?>">
                <div class="kitap">
                    <div class="ust"><img src="img/<?php echo $kitap["resim"]?>" height="120px" width="100%"></div>
                    <div class="alt"><?php echo $kitap["isim"] ?></div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    <a href="kitap_detay_hazirlik.php">detay</a>
</body>
</html>