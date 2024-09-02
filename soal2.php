<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kompensasi Lembur</title>
</head>
<body>
    <h1>Konpensasi lembur</h1>
    <form action="" method="post">
        <label for="jamMulai">Jam Mulai Kerja:</label>
        <input type="number" id="jamMulai" name="jamMulai" min="0" max="23" required>
        <br>
        <label for="jamPulang">Jam Pulang Kerja:</label>
        <input type="number" id="jamPulang" name="jamPulang" min="0" max="23" required>
        <br><br>
        <button type="submit" name="submit">Hitung</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $jamMulaiKerja = $_POST['jamMulai'];
    $jamPulangKerja = $_POST['jamPulang'];

    function hitungKompensasi($jamMulaiKerja, $jamPulangKerja) {
        // Hitung jumlah jam kerja
        $jumlahJamKerja = $jamPulangKerja - $jamMulaiKerja;

        // Hitung jumlah jam lembur (lebih dari 8 jam)
        $jamLembur = $jumlahJamKerja - 8;

        // Inisialisasi kompensasi
        $kompensasi = 0;

        if ($jamLembur > 0) {
            // Kompensasi untuk jam lembur pertama
            $kompensasi += 50000;

            // Kompensasi untuk jam lembur berikutnya (jika ada)
            if ($jamLembur > 1) {
                $kompensasi += ($jamLembur - 1) * 25000;
            }
        }

        return [$kompensasi, $jamLembur, $jumlahJamKerja];
    }

    list($kompensasi, $jamLembur, $jumlahJamKerja) = hitungKompensasi($jamMulaiKerja, $jamPulangKerja);
    echo "<h4>Kompensasi yang diterima pegawai adalah Rp. " . number_format($kompensasi, 0, ',', '.') . ".</h4>";
    echo "<h4>Jam Lembur: $jamLembur jam.</h4>";
    echo "<h4>Total Jam Kerja: $jumlahJamKerja jam.</h4>";
}
?>

