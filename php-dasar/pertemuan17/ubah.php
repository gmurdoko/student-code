<?php
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}
require 'functions.php';

$id = $_GET["id"];

$poster = query("SELECT * FROM posters WHERE id = $id")[0];


if ( isset($_POST["submit"]) ) {

    if ( ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
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
    <title>Ubah data poster</title>
</head>
<body>
<h1>Ubah data poster</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $poster["id"]; ?>">
        <input type="hidden" name="imagesLama" value="<?= $poster["images"]; ?>">
        <ul>
            <li>
                <label for="title">Title: </label>
                <input type="text" name="title" id="title" required value="<?= $poster["title"]; ?>">
            </li>
            <li>
                <label for="artist">Artist: </label>
                <input type="text" name="artist" id="artist" required value="<?= $poster["artist"]; ?>">
            </li>
            <li>
                <label for="price">Price: IDR </label>
                <input type="text" name="price" id="price" required value="<?= $poster["price"]; ?>">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" required value="<?= $poster["email"]; ?>">
            </li>
            <li>
                <label for="images">Images: </label> <br>
                <img src="img/<?= $poster['images']; ?>" width= "50px"> <br>
                <input type="file" name="images" id="images" >
            </li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
            
        </ul>
    </form>
</body>
</html>