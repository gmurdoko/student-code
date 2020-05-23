<?php
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}
require 'functions.php';

if ( isset($_POST["submit"]) ) {

    // var_dump($_POST);
    // var_dump($_FILES);
    // die;

    if ( tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data poster</title>
</head>
<body>
<h1>Tambah data poster</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="title">Title: </label>
                <input type="text" name="title" id="title" required>
            </li>
            <li>
                <label for="artist">Artist: </label>
                <input type="text" name="artist" id="artist" required>
            </li>
            <li>
                <label for="price">Price: IDR </label>
                <input type="text" name="price" id="price" required>
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="images">Images: </label>
                <input type="file" name="images" id="images">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
            
        </ul>
    </form>
</body>
</html>