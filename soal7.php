<?php
function bandingkan_nama($nama1, $nama2) {
  $jumlah_karakter_nama1 = strlen($nama1);
  $jumlah_karakter_nama2 = strlen($nama2);

  if ($jumlah_karakter_nama1 > $jumlah_karakter_nama2) {
    $selisih = $jumlah_karakter_nama1 - $jumlah_karakter_nama2;
    $hasil = "$nama1 memiliki jumlah karakter lebih banyak dari $nama2 : Selisih $selisih karakter";
  } elseif ($jumlah_karakter_nama2 > $jumlah_karakter_nama1) {
    $selisih = $jumlah_karakter_nama2 - $jumlah_karakter_nama1;
    $hasil = "$nama2 memiliki jumlah karakter lebih banyak dari $nama1 : Selisih $selisih karakter";
  } else {
    $hasil = "Kedua nama memiliki jumlah karakter yang sama";
  }

  return $hasil;
}
?>

<html>
  <head>
    <title>Perbandingan Nama</title>
  </head>
  <body>
    <h1>Perbandingan Nama</h1>
    <form>
      <label for="nama1">Nama Pertama:</label>
      <input type="text" id="nama1" name="nama1" required><br><br>
      <label for="nama2">Nama Kedua:</label>
      <input type="text" id="nama2" name="nama2" required><br><br>
      <input type="submit" value="Bandingkan">
    </form>

    <?php
    if (isset($_GET['nama1']) && isset($_GET['nama2'])) {
      $nama1 = $_GET['nama1'];
      $nama2 = $_GET['nama2'];
      $hasil = bandingkan_nama($nama1, $nama2);
      echo "<p>Nama pertama: $nama1 dan nama kedua: $nama2</p> <br>";
      echo "<p>$hasil</p>";
    }
    ?>
  </body>
</html>