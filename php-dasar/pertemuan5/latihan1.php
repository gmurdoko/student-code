<?php
//Array: variabel yang dapat memiliki banyak nilai
// elemen pada array boleh mempuanyai tipe data berbeda
// key and value pair (index dan isi)

$hari = array("Senin","Selasa","Rabu");
$bulan = ["Januari","Februari","Maret"];
$arrl = [123, "Tulisan", False];

//menampilkan isi array

// var_dump($hari);
// echo "<br>";
// print_r($bulan);

//menampilkan satu elemen
// echo "<br>";
// echo $arrl[0];
// echo "<br>";
// echo $hari[1];

// Menambahkan elemen baru

var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);



?>