<?php
$mahasiswa = [
    ["nama"=>"Galang","npm"=>"14753026","jurusan"=>"Manajemen","email"=>"mail@gmail.com", "gambar"=>"IMG_20181106_205509_499.jpg"],
    ["nama"=>"Cahyo","npm"=>"14753027","jurusan"=>"Manajemen","email"=>"mail@gmail.com", "gambar"=>"IMG_20181220_213242_523.jpg"],
    ["nama"=>"Murdoko","npm"=>"14753028","jurusan"=>"Manajemen","email"=>"mail@gmail.com", "gambar"=>"IMG_20190110_224950_616.jpg"]

];
?>

<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
            img {
                height:100px; width:100px;
            }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs): ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"];?>">
        </li>
        <li>Nama   :<?= $mhs["nama"];?></li>
        <li>NPM    :<?= $mhs["npm"];?></li>
        <li>Jurusan:<?= $mhs["jurusan"];?></li>
        <li>Email  :<?= $mhs["email"];?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>