<?php
include "koneksi.php";

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

if ($keyword != '') {
  $query = mysqli_query($conn,
    "SELECT * FROM produk
     WHERE nama_produk LIKE '%$keyword%'
     ORDER BY id ASC");
} else {
  $query = mysqli_query($conn, "SELECT * FROM produk ORDER BY id ASC");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Toko Online</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS Sendiri -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- HEADER -->
<header class="bg-purple text-white py-3">
  <div class="container d-flex justify-content-between align-items-center">
    <h1 class="fs-3 mb-0">Toko Online</h1>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link text-white fw-bold" href="produk_list.php">
          Kelola Produk
        </a>
      </li>
    </ul>
  </div>
</header>

<!-- CAROUSEL -->
<div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/image/gambar1.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="assets/image/gambar2.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="assets/image/gambar3.jpg" class="d-block w-100">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- KONTEN -->
<main class="container my-5">
  <div class="row">

    <!-- PRODUK -->
    <section class="col-lg-9">

      <!-- FORM PENCARIAN -->
      <form method="GET" class="mb-4">
        <div class="input-group">
          <input type="text" name="keyword" class="form-control"
                 placeholder="Cari produk..."
                 value="<?= htmlspecialchars($keyword); ?>">
          <button class="btn btn-primary">Cari</button>

          <?php if ($keyword != ''): ?>
            <a href="index.php" class="btn btn-secondary">Reset</a>
          <?php endif; ?>
        </div>
      </form>

      <!-- GRID PRODUK -->
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
        <?php while ($p = mysqli_fetch_assoc($query)) { ?>
          <div class="col">
            <div class="card h-100 text-center">
              <img src="assets/image/<?= htmlspecialchars($p['gambar']); ?>" class="card-img-top">
              <div class="card-body">
                <h6 class="card-title"><?= htmlspecialchars($p['nama_produk']); ?></h6>
                <p class="text-danger">
                  Rp <?= number_format($p['harga'],0,',','.'); ?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

    </section>

    <!-- SIDEBAR -->
    <aside class="col-lg-3 text-center">
      <h4 class="text-purple mb-3">Rekomendasi</h4>
      <img src="assets/image/gambar1.jpg" class="img-fluid rounded mb-2">
      <p><b>Baju Batik Coklat</b></p>
      <p class="text-danger">Rp 369.000,00</p>
    </aside>

  </div>
</main>

<!-- FOOTER -->
<footer class="bg-light py-4 mt-5">
  <div class="container text-center">
    <p class="mb-0">© 2025 Toko Online</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
