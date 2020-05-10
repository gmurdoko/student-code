<?php
require 'functions.php';

if ( isset($_POST["submit"]) ) {

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
    <form action="" method="post">
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
                <input type="text" name="images" id="images" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
            
        </ul>
    </form>
</body>
</html>