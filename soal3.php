<?php 
for ($i =1; $i<=11; $i++){
    $hasil= $i * 5;
    if($hasil % 10 == 0){
        continue;
    } elseif ($hasil >=  65){
        break;
    }

    echo "$i x 5 = $hasil <br>";
}

?>