<?php 

function ganti_kata($kata, $cari, $ganti)
{
    $string    = str_split($kata);
    $jumlah    = count($string);
    $baru   = [];
    for ($i=0; $i <$jumlah ; $i++) { 
        if($string[$i]==$cari) {
            array_push($baru,$ganti);
        }else{
            array_push($baru,$string[$i]);
        };
    }
    return implode($baru,'');
}

var_dump(ganti_kata('Tuban','a','u'));



?>
