<?php
$prints = [
    ["title"=>"Katana","price"=>100000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20190808_204136_712.jpg"],
    ["title"=>"Blah","price"=>500000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20190809_174715_994.jpg"],
    ["title"=>"Sommarfagel","price"=>200000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20191129_200034_012.jpg"],
    ["title"=>"Infinity","price"=>100000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20191130_171652_539.jpg"],
    ["title"=>"Starmachine","price"=>500000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20191201_160449_771.jpg"],
    ["title"=>"Hakuna Matata","price"=>200000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20191202_162611_648.jpg"],
    ["title"=>"Disco","price"=>100000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20200222_011443_842.jpg"],
    ["title"=>"London","price"=>500000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20200222_190516_290.jpg"],
    ["title"=>"Pika pika","price"=>200000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20200224_040344_214.jpg"],
    ["title"=>"Moon","price"=>100000,"artist"=>"@murdoko_","email"=>"mail@gmail.com", "images"=>"IMG_20200324_130642_536.jpg"],

];


?>

<html>
<head>
    <title>GET</title>
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
        <!-- <li>
            <img src="img/<?= $print["images"];?>">
        </li> -->
        <li>
            <a href="latihan2.php"><?= $print["title"];?></a>
        </li>
        <!-- <li>IDR   :<?= $print["price"];?></li>
        <li>Artist:<?= $print["artist"];?></li>
        <li>Email  :<?= $print["email"];?></li> -->
    </ul>
    <?php endforeach; ?>
</body>
</html>