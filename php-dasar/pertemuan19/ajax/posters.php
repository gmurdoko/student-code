<?php
require '../functions.php';
$kataKunci = $_GET["kataKunci"];
$query = "SELECT * FROM posters WHERE title LIKE '%$kataKunci%' OR artist LIKE '%$kataKunci%' ";
$posters = query($query);
?>
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