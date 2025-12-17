<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'"));
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5" style="max-width:600px">

  <div class="card shadow">
    <div class="card-header bg-warning">
      <h5 class="mb-0">Edit Produk</h5>
    </div>
    <div class="card-body">

      <form method="POST" action="produk_proses_edit.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id; ?>">

        <div class="mb-3">
          <label class="form-label">Nama Produk</label>
          <input type="text" name="nama_produk" class="form-control"
                 value="<?= htmlspecialchars($data['nama_produk']); ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Harga</label>
          <input type="number" name="harga" class="form-control"
                 value="<?= $data['harga']; ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Gambar Produk</label>
          <input type="file" name="gambar" class="form-control">
          <small class="text-muted">
            Kosongkan jika tidak ingin mengganti gambar
          </small>
        </div>


        <div class="d-flex justify-content-between">
          <a href="produk_list.php" class="btn btn-secondary">← Kembali</a>
          <button class="btn btn-warning">Update</button>
        </div>

      </form>

    </div>
  </div>

</div>
</body>
</html>
