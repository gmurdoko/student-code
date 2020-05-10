<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


if ( isset($_POST["submit"]) ) {
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $price = $_POST["price"];
    $email = $_POST["email"];
    $images = $_POST["images"];
    
    
    $query = "INSERT INTO posters
            VALUES 
            ('','$title', '$artist', '$price', '$email', '$images')
            ";
    mysqli_query($conn, $query);

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
                <input type="text" name="title" id="title">
            </li>
            <li>
                <label for="artist">Artist: </label>
                <input type="text" name="artist" id="artist">
            </li>
            <li>
                <label for="price">Price: IDR </label>
                <input type="text" name="price" id="price">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="images">Images: </label>
                <input type="text" name="images" id="images">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
            
        </ul>
    </form>
</body>
</html>