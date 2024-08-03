<?php $get_yayin = $_GET["yayin"]?>
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
    <link rel="stylesheet" type="text/css" href="style3.css" />
</head>
<body>
    <div class="header">
        <div class="baslik bosluk">Kitap_HTML</div>
        <div class="anasayfa bosluk">Anasayfa</div>
        <div class="kitaplar bosluk">Tüm Kitaplar</div>
    </div>
    <div class="yayinlar">
        <a href = "yayin_filtre.php?yayin=A yayınevi"><div class="yayinevleri ay">A yaınevi</div></a>
        <a href = "yayin_filtre.php?yayin=B yayınevi"><div class="yayinevleri">B yaınevi</div></a>
        <a href = "yayin_filtre.php?yayin=C yayınevi"><div class="yayinevleri">C yaınevi</div></a>
    </div>
    <div class="tum_kitaplar">
        <?php foreach($tum_kitaplar as $kitap): ?>
            <?php if ($get_yayin == $kitap["yayinevi"]): ?>
                <a href = "kitap_detay.php?id=<?php echo $kitap["id"]?>">
                    <div class="kitap">
                        <div class="ust"><img src="img/<?php echo $kitap["resim"]?>" height="100%" width="100%"></div>
                        <div class="yazar_isim">
                            <div class="alt yazar">yazar</div>
                            <div class="alt"><?php echo $kitap["isim"] ?></div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>