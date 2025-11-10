
// TUGAS 1 - JavaScript

// Data barang
const barang = [
  { nama: "Susu UHT", harga: 42000, jumlah: 10 },
  { nama: "Roti Tawar", harga: 30000, jumlah: 3 },
  { nama: "Mie Instan", harga: 20000, jumlah: 5 },
  { nama: "Sosis", harga: 51000, jumlah: 7 }
];

// Buat tabelnya
const tabel = document.getElementById("tabelBarang");
barang.forEach((b) => {
  const row = tabel.insertRow(-1); //tambah baris
  row.innerHTML = `
    <td>${b.nama}</td>
    <td>Rp ${b.harga.toLocaleString("id-ID")}</td>
    <td>${b.jumlah}</td>
  `;
});

// Fungsi hitung total
function hitungTotal() {
  let totalAkhir = 0;
  barang.forEach((b) => {
    totalAkhir += b.harga * b.jumlah;
  });
  // Tampilkan total di bawah tombol
  document.getElementById("hasil").innerHTML =
    `Total harga pembelian semua barang adalah: <b>Rp ${totalAkhir.toLocaleString("id-ID")}</b>`;
}

// Jalankan saat tombol diklik
document.getElementById("hitung").addEventListener("click", hitungTotal);


// TUGAS 2

$(document).ready(function () {
  $("#tugas2").text("Halo Dunia dengan jQuery!");
});


// TUGAS 3

$("#tomboltugas3").click(function () {
  $("#tugas3").text("Tombol sudah diklik!").css("color", "red");
});


// TUGAS 4 

$("#sembunyi").click(function () {
  $("#kotak").fadeOut();
});

$("#tampil").click(function () {
  $("#kotak").fadeIn();
});
