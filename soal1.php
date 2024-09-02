<?php 

$teks = "selamat ulang tahu yang ke 17123131313";
$number = preg_replace('/[^0-9]/', '',$teks);

if ($number){
    echo"teks mengandung angka : ". implode(' juga ',str_split($number,1));

    //ADA ANGKA SATU KARNA HANYA UNTUK MEMISAHKAN SATU KARAKTER//
    //strsplit method digunakan untuk mengubah tipe data string menjadi array//

} else {
    echo "teks tidak mengandung angka";
}


?>
