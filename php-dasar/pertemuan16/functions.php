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

    //upload gambar
    $images = upload();

    if (!$images) {
        return false;
    }
    
    $query = "INSERT INTO posters
            VALUES 
            ('','$title', '$artist', '$price', '$email', '$images')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload(){

    $namafile = $_FILES['images']['name'];
    $ukuranfile =  $_FILES['images']['size'];
    $error = $_FILES['images']['error'];
    $tmpname = $_FILES['images']['tmp_name']; 

    // cek upload
    if ($error === 4) {
        echo "<script>
            alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek type data
    $extensiimagesValid = ['jpg','jpeg','png'];
    $extensiimages = explode('.', $namafile);
    $extensiimages = strtolower(end($extensiimages));
    
    if ( !in_array($extensiimages, $extensiimagesValid) ) {
        echo "<script>
            alert('file gambar tidak valid');
            </script>";
        return false;
    }

    // cel ukuran

    if ($ukuranfile > 2000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // lolos pengecekan 
    // generate nama
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $extensiimages;

    move_uploaded_file($tmpname, 'img/' . $namafilebaru);

    return $namafilebaru;


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
    $imagesLama = htmlspecialchars($data["imagesLama"]);

    // cek user pilih gambar baru
    if ($_FILES['images']['error'] === 4) {
        $images = $imagesLama;
    } else {
        $images = upload();
    }

    

    $query = "UPDATE posters SET 
            title = '$title', artist = '$artist',
            price = '$price', email = '$email',
            images = '$images' WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function cari($keyword){
    
    $query = "SELECT * FROM posters WHERE
            title LIKE '%$keyword%' OR
            artist LIKE '%$keyword%'
    ";

    return query($query);


}

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username ='$username'");

    if ( mysqli_fetch_assoc($result) ) {
        echo "<script>
            alert('username yang dipilih sudah terdaftar!')
        </script>";
        return false;
    }
    // cek konfirmasi password

    if ($password !== $password2) {
        echo "
            <script>
                alert('konfirmasi password tidak sama');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan password ke db
    mysqli_query($conn, "INSERT INTO users VALUES ('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}

?>