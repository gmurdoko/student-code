<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $title = htmlspecialchars($data["title"]);
    $artist = htmlspecialchars($data["artist"]);
    $price = htmlspecialchars($data["price"]);
    $email = htmlspecialchars($data["email"]);
    $images = htmlspecialchars($data["images"]);
    
    $query = "INSERT INTO posters
            VALUES 
            ('','$title', '$artist', '$price', '$email', '$images')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;

    $query = "DELETE FROM posters WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

     
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $artist = htmlspecialchars($data["artist"]);
    $price = htmlspecialchars($data["price"]);
    $email = htmlspecialchars($data["email"]);
    $images = htmlspecialchars($data["images"]);

    $query = "UPDATE posters SET 
            title = '$title', artist = '$artist',
            price = '$price', email = '$email',
            images = '$images' WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

?>