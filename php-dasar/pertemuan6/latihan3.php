<?php
$prints = [
    ["names"=>"Galang","price"=>100000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20181106_205509_499.jpg"],
    ["names"=>"Cahyo","price"=>500000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20181220_213242_523.jpg"],
    ["names"=>"Murdoko","price"=>200000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20190110_224950_616.jpg"],
    ["names"=>"Galang","price"=>100000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20181106_205509_499.jpg"],
    ["names"=>"Cahyo","price"=>500000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20181220_213242_523.jpg"],
    ["names"=>"Murdoko","price"=>200000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20190110_224950_616.jpg"],
    ["names"=>"Galang","price"=>100000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20181106_205509_499.jpg"],
    ["names"=>"Cahyo","price"=>500000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20181220_213242_523.jpg"],
    ["names"=>"Murdoko","price"=>200000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20190110_224950_616.jpg"],
    ["names"=>"Galang","price"=>100000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20181106_205509_499.jpg"],

];
?>

<html>
<head>
    <title>Tropus Project</title>
    <style>
            img {
                height:100px; width:100px;
            }
    </style>
</head>
<body>
    <h1>Art List</h1>
    <?php foreach( $prints as $print): ?>
    <ul>
        <li>
            <img src="img/<?= $print["images"];?>">
        </li>
        <li>Nama   :<?= $print["names"];?></li>
        <li>IDR   :<?= $print["price"];?></li>
        <li>Artist:<?= $print["artist"];?></li>
        <li>Email  :<?= $print["email"];?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>