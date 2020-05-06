<?php
$mahasiswa = [
    ["Galang", "14757575", "Manajemen", "mail@mail"],
    ["Cahyo", "14757576", "Manajemen", "mail1@mail"],
    ["Murdoko", "14757577", "Manajemen", "mail2@mail"]
];

?>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ): ?>
    <ul>
        <li>Nama   :<?= $mhs[0];?></li>
        <li>NPM    :<?= $mhs[1];?></li>
        <li>Jurusan:<?= $mhs[2];?></li>
        <li>Email  :<?= $mhs[3];?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>