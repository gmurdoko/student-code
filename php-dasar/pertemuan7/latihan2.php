<?php
    if (!isset($_GET["title"]) ||
        !isset($_GET["images"]) ||
        !isset($_GET["price"]) ||
        !isset($_GET["artist"]) ||
        !isset($_GET["email"])
        ) {

            header("Location: latihan1.php");
            exit;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Art List</title>
    <style>
            img {
                height:100px; width:100px;
            }
    </style>
</head>
<body>
    
    <ul>
        <li>
            <img src="img/<?= $_GET["images"];?>">
        </li>
        <li><?= $_GET["title"]; ?></li>
        <li>IDR. <?= $_GET["price"];?></li>
        <li><?= $_GET["artist"];?></li>
        <li><?= $_GET["email"];?></li> 
    </ul>
    <a href="latihan1.php">Kembali ke laman sebelumnya</a>
</body>
</html>