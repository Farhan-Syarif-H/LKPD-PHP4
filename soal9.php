<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Pecahan Uang</title>
    <style>
    </style>
</head>
<body>
    <h1>Hitung Pecahan Uang Rupiah</h1>
    <form action="" method="post">
        <label for="uang">Masukkan Jumlah Uang (dalam Rupiah):</label>
        <input type="number" id="uang" name="uang" min="0" step="1" required>
        <button type="submit" name="submit">Hitung</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jumlahUang = intval($_POST['uang']);

        function hitungPecahan($jumlahUang) {
            $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 50];
            $hasil = [];

            // Menghitung jumlah lembar untuk setiap pecahan
            foreach ($pecahan as $nominal) {
                $hasil[$nominal] = intdiv($jumlahUang, $nominal);
                $jumlahUang %= $nominal;
            }

            return $hasil;
        }

        $hasil = hitungPecahan($jumlahUang);

        echo "<h2>Uang: Rp. " . number_format($jumlahUang, 0, ',', '.') . "</h2>";
        echo "<h3>Lembar Rupiah:</h3>";
        echo "<ul>";
        foreach ($hasil as $nominal => $jumlah) {
            if ($jumlah > 0) {
                echo "<li>Rp " . number_format($nominal, 0, ',', '.') . " : $jumlah</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
