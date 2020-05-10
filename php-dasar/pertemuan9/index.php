<?php
require 'functions.php';
$posters = query("SELECT * FROM posters");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posters</title>
</head>
<body>
    <h1>Poster</h1>
    <table border= "1" cellpadding= "10" cellspacing= "0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Harga</th>
        <th>Artist</th>
        <th>Email</th>
    </tr>
    <?php 
        $i = 1;
        foreach ( $posters as $poster ) : ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="">ubah</a> | 
            <a href="">hapus</a>
        </td>
        <td> <img src="img/<?= $poster["images"]; ?>" width="50"></td>
        <td><?= $poster["title"];?></td>
        <td><?= $poster["price"];?></td>
        <td><?= $poster["artist"];?></td>
        <td><?= $poster["email"];?></td>
    </tr>
    <?php 
    $i++;
    endforeach;
    ?>
    </table>
</body>
</html>