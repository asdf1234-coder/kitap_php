<?php $get_id = $_GET["id"]?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="kitap_detay.css" />
</head>
<body>
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
    <?php foreach($tum_kitaplar as $kitap): ?>
        <?php if ($kitap["id"] == $get_id): ?>
            <div class="container">
                <div class="resim"><img src="img/<?php echo $kitap["resim"]?>"></div>
                <div><?php echo $kitap["isim"]?></div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>