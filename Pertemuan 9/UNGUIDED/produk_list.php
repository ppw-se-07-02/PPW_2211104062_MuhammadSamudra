<?php
include "koneksi.php";

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
if ($keyword != '') {
  $query = mysqli_query($conn,
    "SELECT * FROM produk 
     WHERE nama_produk LIKE '%$keyword%'
     ORDER BY id DESC");
} else {
  $query = mysqli_query($conn, "SELECT * FROM produk ORDER BY id ASC");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">

  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">Kelola Produk</h3>
    <a href="index.php" class="btn btn-outline-secondary">
      ← Kembali ke Website
    </a>
  </div>

  <!-- Toolbar -->
  <div class="card mb-4 shadow-sm">
    <div class="card-body d-flex justify-content-between align-items-center">
      <a href="produk_tambah.php" class="btn btn-success">
        + Tambah Produk
      </a>

      <form method="GET" class="d-flex">
        <input type="text" name="keyword" class="form-control me-2"
               placeholder="Cari produk..."
               value="<?= htmlspecialchars($keyword); ?>">
        <button class="btn btn-primary">Cari</button>
      </form>
    </div>
  </div>

  <!-- Tabel -->
  <div class="card shadow-sm">
    <div class="card-body">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; while($row=mysqli_fetch_assoc($query)){ ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($row['nama_produk']); ?></td>
            <td>Rp <?= number_format($row['harga'],0,',','.'); ?></td>
            <td>
              <img src="assets/image/<?= $row['gambar']; ?>" width="60">
            </td>
            <td>
              <a href="produk_edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="produk_hapus.php?id=<?= $row['id']; ?>"
                 onclick="return confirm('Yakin hapus produk?')"
                 class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
</body>
</html>
