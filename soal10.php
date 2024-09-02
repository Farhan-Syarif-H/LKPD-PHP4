<?php
// Data usia dalam array
$usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

// Inisialisasi variabel untuk menghitung jumlah kategori
$jumlahAnakAnak = 0;
$jumlahDewasa = 0;

// Memproses setiap usia dalam array
foreach ($usia as $umur) {
    if ($umur < 17) {
        $jumlahAnakAnak++;
    } else {
        $jumlahDewasa++;
    }
}

// Menampilkan hasil
echo "List usia = " . implode(",", $usia) ."<br>";
echo "Jumlah kategori dewasa : " . $jumlahDewasa . " orang"."<br>";
echo "Jumlah kategori anak-anak : " . $jumlahAnakAnak . " orang"."<br>";
?>
