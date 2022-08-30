<?php
function nilai_terbesar($x , $y , $z){
    $besar = $x;
    if ($y > $besar){
        $besar = $y;
    }
    if ($z > $besar){
        $besar = $z;
    }

    echo "Nilai Terbesar adalah ". $besar;
}

nilai_terbesar(30,40,21);

echo("<br> Kedua ");
nilai_terbesar(60,40,50);

echo("<br> Ketiga ");
nilai_terbesar(20,20,70);
?>

