<?php

//////////////////////////////////////////////////////
//1. pengenalan php

echo "Hiiiiii~~";
echo "<br>";
echo "Nama Saya samud";
echo "<br>";
echo "kelas se06-03";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//2. variabel

// $nama = "samud";
// $nim = "2211104062";
// $hobi = "doomscrolling";

// echo "Nama: " . $nama;
// echo "<br>";
// echo "NIM: " . $nim;
// echo "<br>";
// echo "Hobi: " . $hobi;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//3. konstanta

// define("Nama", "Jasifa");
// define("NIM", "2311104060");
// define("Asal", "Medan");

// echo "Nama :" . Nama . "<br>";
// echo "NIM :" . NIM . "<br>";
// echo "Asal :" . Asal;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//4. Operator

// $nilai = 87;

// if ($nilai > 50) {
//     echo "Nilai anda adalah " . $nilai . ". Selamat, Anda lulus";
// } else {
//     echo "Nilai anda adalah " . $nilai . ". Maaf, Anda tidak lulus";
// }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//5. struktur kondisi

// $nilai = 87;

// switch ($nilai) {  
//     case ($nilai > 50 && $nilai <= 60): 
//         echo "Nilai Anda adalah $nilai. Indeks nilai anda C"; 
//         break; 
//     case ($nilai > 60 && $nilai <= 70): 
//         echo "Nilai Anda adalah $nilai. Indeks nilai anda BC"; 
//         break; 
//     case ($nilai > 70 && $nilai <= 75): 
//         echo "Nilai Anda adalah $nilai. Indeks nilai anda B"; 
//         break; 
//     case ($nilai > 75 && $nilai <= 80): 
//         echo "Nilai Anda adalah $nilai. Indeks nilai anda AB"; 
//         break; 
//     case ($nilai > 80 && $nilai <= 100): 
//         echo "Nilai Anda adalah $nilai. Indeks nilai anda A"; 
//         break; 
//     default:
//         echo "Nilai Anda adalah $nilai. Maaf, Anda tidak lulus"; 
//         break; 
// } 

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//6. looping

// echo "Ini adalah contoh perulangan for"; 
// echo "<br>"; 
// for ($i = 1; $i <= 10; $i++) { 
//     echo $i . " "; 
// } 
 
// echo "<br>"; 
// echo "<br>"; 
// echo "Ini adalah contoh perulangan while"; 
// echo "<br>"; 
// $i = 1; 
// while ($i <= 20) { 
//     echo $i . " "; 
//     $i += 2; 
// } 
 
// echo "<br>"; 
// echo "<br>"; 
// echo "Ini adalah contoh perulangan do-while"; 
// echo "<br>"; 
// $i = 28; 
// do { 
//     echo $i . " "; 
//     $i -= 3; 
// } while ($i > 0); 

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//7. function (1) tanpa parameter tanpa return value
// function cetakGenap() 
// { 
//     for ($i = 1; $i <= 60; $i++) { 
//         if ($i % 2 == 0) { 
//             echo "$i "; 
//         } 
//     } 
// } 
// //pemanggilan fungsi 
// cetakGenap();

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// function (2) dengan parameter tanpa return value

// function cetakGenap($awal, $akhir) 
// { 
//     for ($i = $awal; $i <= $akhir; $i++) { 
//         if ($i % 2 == 0) { 
//             echo "$i "; 
//         } 
//     } 
// } 
// //pemanggilan fungsi 
// $a = 10; 
// $b = 50; 
// echo "Bilangan ganjil dari $a sampai $b adalah : <br>"; 
// cetakGenap($a, $b); 

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// function (3) luas segitiga dengan parameter dan return value

// function luasSegitiga($alas, $tinggi) { 
//     return 0.5 * $alas * $tinggi; 
// } 
// //pemanggilan fungsi 
// $a = 5; 
// $t = 35; 
// echo "Luas Segitiga dengan alas $a dan tinggi $t adalah : " . luasSegitiga($a, $t);

// function luasKubus($sisi) {
//     return 6 * $sisi * $sisi;
// }

// // pemanggilan fungsi
// $s = 5;

// echo "Luas permukaan kubus dengan sisi $s adalah: " . luasKubus($s);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//8. array 1

// $arrKendaraan = ["Mobil", "Pesawat", "Kereta Api", "Kapal Laut"]; 
// echo $arrKendaraan[0] . "<br>"; //Mobil 
// echo $arrKendaraan[2] . "<br>"; //Kereta Api 

// $arrKota = []; 
// $arrKota[] = "Jakarta"; 
// $arrKota[] = "Medan"; 
// $arrKota[] = "Bandung"; 
// $arrKota[] = "Malang"; 
// $arrKota[] = "Sulawesi"; 

// array_push($arrKota, "Padang", "Riau"); 

// echo $arrKota[1] . "<br>"; //Medan 
// echo $arrKota[2] . "<br>"; //Bandung 
// echo $arrKota[4] . "<br>"; //Sulawesi 
// echo $arrKota[5] . "<br>";
// echo $arrKota[6] . "<br>";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// array 2 asosiatif

// $arrAlamat = [ 
//     "Rona" => "Banjarmasin", 
//     "Dhiva" => "Bandung", 
//     "Ilham" => "Medan", 
//     "Oku" => "Hongkong", 
// ]; 
 
// echo $arrAlamat["Dhiva"] . "<br>"; //Bandung 
// echo $arrAlamat['Oku'] . "<br>"; //Hongkong 
 
// $arrNim = []; 
// $arrNim["Rona"] = "11011112"; 
// $arrNim["Dhiva"] = "11011101"; 
// $arrNim["Ilham"] = "11011309"; 
// $arrNim["Oku"] = "11014765"; 
// $arrNim["Fadhlan"] = "11011113"; 
 
// echo $arrNim["Ilham"] . "<br>"; //11011309 
// echo $arrNim['Fadhlan'] . "<br>"; //11011113 

?>