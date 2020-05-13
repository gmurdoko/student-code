<?php
require 'functions.php';

$posters = query("SELECT * FROM posters");

if ( isset($_POST["cari"]) ) {
    $posters = cari($_POST["keyword"]);
}
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
    <a href="tambah.php">Tambah data poster</a>
    <br>
    <br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" id="" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br>
    <br>

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
            <a href="ubah.php?id=<?= $poster["id"];?>">ubah</a> | 
            <a href="hapus.php?id=<?= $poster["id"];?>" onclick="
                return confirm('yakin?');">hapus</a>
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