<?php
include "koneksi.php";

$nama  = $_POST['nama_produk'];
$harga = $_POST['harga'];

$namaFile = $_FILES['gambar']['name'];
$tmpFile  = $_FILES['gambar']['tmp_name'];

// pindahkan file ke folder assets/image
move_uploaded_file($tmpFile, "assets/image/" . $namaFile);

// simpan ke database
mysqli_query($conn,
  "INSERT INTO produk (nama_produk, harga, gambar)
   VALUES ('$nama', '$harga', '$namaFile')");

header("Location: produk_list.php");
