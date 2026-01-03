<?php
// =========================================
// 1. KONVERSI SUHU (VERSI FUNGSI DENGAN PARAMETER)
// =========================================

echo "<h2>1. Konversi Suhu (dengan fungsi)</h2>";

// Celcius > Fahrenheit
function c_to_f($c) {
    return ($c * 9/5) + 32;
}

// Fahrenheit > Celcius
function f_to_c($f) {
    return ($f - 32) * 5/9;
}

// Celcius > Kelvin
function c_to_k($c) {
    return $c + 273.15;
}

// contoh input
$celcius = 31;
$fahrenheit = 87;

echo "Celcius ke Fahrenheit ($celcius °C) = " . number_format(c_to_f($celcius), 2) . " °F<br>";
echo "Fahrenheit ke Celcius ($fahrenheit °F) = " . number_format(f_to_c($fahrenheit), 2) . " °C<br>";
echo "Celcius ke Kelvin ($celcius °C) = " . number_format(c_to_k($celcius), 2) . " K<br><br>";




// =========================================
// 2. KALKULATOR DISKON
// =========================================

echo "<h2>2. Kalkulator Diskon</h2>";

// contoh input
$total_belanja = 750000; 

if ($total_belanja >= 1000000) {
    $diskon = 0.30;
} elseif ($total_belanja >= 500000) {
    $diskon = 0.20;
} elseif ($total_belanja >= 100000) {
    $diskon = 0.10;
} else {
    $diskon = 0;
}

$jumlah_diskon = $total_belanja * $diskon;
$total_bayar = $total_belanja - $jumlah_diskon;

echo "Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Potongan Harga: Rp " . number_format($jumlah_diskon, 0, ',', '.') . "<br>";
echo "Total Bayar: Rp " . number_format($total_bayar, 0, ',', '.') . "<br><br>";



// =========================================
// 3. MANIPULASI ARRAY
// =========================================

echo "<h2>3. Manipulasi Array</h2>";

$nilai = [75, 89, 65, 90, 85, 70, 98, 65, 69, 70, 12];
echo "Array awal [";
foreach ($nilai as $n) {
    echo $n . " ";
}
echo "]<br><br>";

//cari nilai
$max = max($nilai);
$min = min($nilai);
$rata = array_sum($nilai) / count($nilai);

// Banyak mahasiswa lulus 
$lulus = 0;
foreach ($nilai as $n) {
    if ($n >= 70) $lulus++;
}

// Urutkan dari tertinggi ke terendah
$sorted = $nilai;
rsort($sorted);

echo "Nilai tertinggi: $max<br>";
echo "Nilai terendah: $min<br>";
echo "Rata-rata nilai: " . number_format($rata, 2) . "<br>";
echo "Banyak yang lulus: $lulus<br>";

echo "<br>Urutan nilai (tertinggi ke terendah):<br>";
foreach ($sorted as $s) {
    echo $s . " ";
}

?>
