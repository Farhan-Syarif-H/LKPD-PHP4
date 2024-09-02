<?php 

function searchnumber ($angkaCari, ...$data){
    $jumlah=0;
    foreach($data as $value){
        if ($value == $angkaCari){
            $jumlah += 1;
        }
    }
    return $jumlah;
}

$angkaCari = 100;

echo "jumlah angka $angkaCari =".searchnumber($angkaCari,100,20,40,30,100,100)."<br>";

?>