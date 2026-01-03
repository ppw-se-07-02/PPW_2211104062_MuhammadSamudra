<?php
include "koneksi.php";

$id    = $_POST['id'];
$nama  = $_POST['nama_produk'];
$harga = $_POST['harga'];

if ($_FILES['gambar']['name'] != '') {
  // jika upload gambar baru
  $namaFile = $_FILES['gambar']['name'];
  $tmpFile  = $_FILES['gambar']['tmp_name'];
  move_uploaded_file($tmpFile, "assets/image/" . $namaFile);

  $query = "UPDATE produk 
            SET nama_produk='$nama', harga='$harga', gambar='$namaFile'
            WHERE id='$id'";
} else {
  // tanpa ganti gambar
  $query = "UPDATE produk 
            SET nama_produk='$nama', harga='$harga'
            WHERE id='$id'";
}

mysqli_query($conn, $query);
header("Location: produk_list.php");
