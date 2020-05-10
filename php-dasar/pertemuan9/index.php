<?php
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    $result = mysqli_query($conn, "SELECT * FROM posters");
    // var_dump($result);

// ambil data fetch posters daro object result
// mysqli_fetch_row() array numerik
// mysqli_fetch_assoc() array asosiatif
// mysqli_fetch_array() array asosiatif fan numerik
// mysqli_fetch_object() 

    // while($poster = mysqli_fetch_assoc($result)) {
    //     var_dump($poster);
    // }
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
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td>1</td>
        <td>
            <a href="">ubah</a> | 
            <a href="">hapus</a>
        </td>
        <td> <img src="img/<?= $row["images"]; ?>" width="50"></td>
        <td><?= $row["title"];?></td>
        <td><?= $row["price"];?></td>
        <td><?= $row["artist"];?></td>
        <td><?= $row["email"];?></td>
    </tr>
    <?php endwhile; ?>
    </table>
</body>
</html>