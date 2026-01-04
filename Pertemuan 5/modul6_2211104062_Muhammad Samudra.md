<div align="center">

**LAPORAN PRAKTIKUM**  
**PERANCANGAN DAN PEMROGRAMAN WEB**  

<br><br>

**MODUL 6**  
**JAVASCRIPT DAN JQUERY**

<br><br>

<img src="../logo-telkom.png" width="250">

<br><br>

Oleh:  
**Muhammad Samudra**  
**2211104062**

<br><br><br>

**PROGRAM STUDI S1 REKAYASA PERANGKAT LUNAK**  
**DIREKTORAT KAMPUS PURWOKERTO**  
**UNIVERSITAS TELKOM**

<br><br>

**2025**

</div>

---

### Tugas 1
Di sini kita ditugaskan untuk menghitung total harga pembelian menggunakan javascript dengan disediakan harga satuan dan dan jumlah pembelian.
Pertama kita mendefinisikan objek barang, beserta propertinya. Lalu  buat loop untuk membuat tabel sesuai objek yang sudah didefinisikan. Untuk fungsi hasil total harga, pertama menambahkan variabel penampung total penjumlahan. Lalu membuat loop hingga semua objek barang habis, setiap perulangan kita menambahkan variabel total dengan harga*jumlah. Terakhir kita mengubah format menjadi IDR, dan menampilkannya setelah mengklik tombol di web. 
Lalu buat wadah di html sesuai id yang digunakan di javascript

#### html
```
<!-- TUGAS 1 - JavaScript -->
  <h2>Tugas 1: Hitung Total Harga Barang</h2>
  <p>Menghitung total harga pembelian beberapa barang menggunakan JavaScript.</p>

  <table id="tabelBarang">
    <tr>
      <th>Nama Barang</th>
      <th>Harga Satuan</th>
      <th>Jumlah</th>
    </tr>
  </table>

  <button id="hitung">Hitung Total Harga</button>

  <p id="hasil"></p>
```
#### js
```
// TUGAS 1 - JavaScript
// Menampilkan data dari objek barang dan menghitung total keseluruhan

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
```
#### Screenshot hasil:
<img src="img/ss1.png" style="border: 2px solid black;">

---

### Tugas 2
Pertama di html buat sebuah kontainer paragraf dan diberi id, misalnya "tugas2". Lalu di file .js buat script yang saat halaman selesai dimuat, mencari elemen yang memiliki id "tugas2", dan ganti isi teks yang akan menggantikannya.

#### html
```
<h2>Tugas 2: jQuery Mengubah Teks</h2>
<p id="tugas2">Belajar jQuery itu asik!</p>
```
#### js
```
$(document).ready(function () {
  $("#tugas2").text("Halo Dunia dengan jQuery!");
});
```
#### Screenshot hasil
<img src="img/ss2.png" style="border: 2px solid black;">

---

### Tugas 3
Di html buat paragraf dengan id 'tugas3', dan juga buat tombol dengan id 'tomboltugas3'. Lalu di .js buat sebuah perintah yang berjalan ketika tombol 'tomboltugas3' diklik. Perintah tersebut mengubah text dan dan juga warnanya menjadi merah, menargetkan elemen yang ber id 'tugas3'

#### html
```
  <h2>Tugas 3: Ubah Teks dan Warna Saat Tombol Diklik</h2>
  <p id="tugas3">Klik tombol di bawah ini</p>
  <button id="tomboltugas3">Klik saya</button>
```
#### js
```
$("#tomboltugas3").click(function () {
  $("#tugas3").text("Tombol sudah diklik!").css("color", "red");
});
```
#### Screenshot hasil:
- awal halaman dimuat:
<img src="img/ss3_1.png" style="border: 2px solid black;">
- setelah mengklik tombol
<img src="img/ss3_2.png" style="border: 2px solid black;">

### Tugas 4
Di html buat kontainer yang berisi kotak biru, lalu dua tombol untuk sembunyikan dan tampilkan dengan id masing-masing. Untuk tombol sembunyi gunakan method .fadeOut(), sementara untuk tombol tampilkan gunakan method .fadeIn(). Arahkan kedua method tersebut ke elemen kotak, tetapi kondisi method dijalankan sesuai id tombol masing-masing.

#### html
```
  <h2>Tugas 4: Sembunyikan dan Tampilkan Kotak (Fade In/Out)</h2>
  <div id="kotak" style="width:100px; height:100px; background-color:blue; margin-bottom:10px;"></div>
  <button id="sembunyi">Sembunyikan</button>
  <button id="tampil">Tampilkan</button>
```
#### js
```
$("#sembunyi").click(function () {
  $("#kotak").fadeOut();
});

$("#tampil").click(function () {
  $("#kotak").fadeIn();
});
```

#### Hasil screenshot:
- tampilan awal
<img src="img/ss4_1.png" style="border: 2px solid black;">
- tampilan setelah di sembunyikan
<img src="img/ss4_2.png" style="border: 2px solid black;">
- tampilan fade
<img src="img/ss4_3.png" style="border: 2px solid black;">
