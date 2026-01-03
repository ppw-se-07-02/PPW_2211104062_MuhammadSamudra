<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5" style="max-width:600px">

  <div class="card shadow">
    <div class="card-header bg-success text-white">
      <h5 class="mb-0">Tambah Produk</h5>
    </div>
    <div class="card-body">

      <form method="POST" action="produk_proses_tambah.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label class="form-label">Nama Produk</label>
          <input type="text" name="nama_produk" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Harga</label>
          <input type="number" name="harga" class="form-control" required>
        </div>

        <form method="POST" action="produk_proses_tambah.php">
        <div class="mb-3">
          <label class="form-label">Gambar Produk</label>
          <input type="file" name="gambar" class="form-control" required>
        </div>


        <div class="d-flex justify-content-between">
          <a href="produk_list.php" class="btn btn-secondary">← Kembali</a>
          <button class="btn btn-success">Simpan</button>
        </div>
      </form>

    </div>
  </div>

</div>
</body>
</html>
