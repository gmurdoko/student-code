<?php
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}
require 'functions.php';

//pagination
$jumlahDataPerLaman = 2;
$jumlahData = count(query("SELECT * FROM posters"));
$jumlahLaman = ceil($jumlahData / $jumlahDataPerLaman);
$lamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerLaman * $lamanAktif ) - $jumlahDataPerLaman;


$posters = query("SELECT * FROM posters LIMIT $awalData, $jumlahDataPerLaman");

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
<a href="logout.php">logout</a>
    <h1>Poster</h1>
    <a href="tambah.php">Tambah data poster</a>
    <br>
    <br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" id="" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id = "keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>
    </form>
    <br>
    <?php if( $lamanAktif > 1 ) : ?>
    <a href="?halaman=<?= $lamanAktif - 1 ?>">&lt;</a>
    <?php endif ; ?>
    <?php for($i = 1; $i <= $jumlahLaman; $i++ ) : ?>
        <?php if( $i == $lamanAktif ) : ?>
            <a href="?halaman=<?= $i; ?>" style= "font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif ; ?>
    <?php endfor ; ?>
    <?php if( $lamanAktif < $jumlahLaman ) : ?>
    <a href="?halaman=<?= $lamanAktif + 1 ?>">&gt;</a>
    <?php endif ; ?>
    <br>
    <div id = "container">
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
    </div>
    <script src="js/script.js"></script>
</body>
</html>