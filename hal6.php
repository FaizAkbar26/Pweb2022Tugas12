<?php
    $arrNIlai=array("Fulan"=>80, "Budi"=>90, "Siti"=>75, "Jono"=>85);
    echo "Menampilkan isi array asosiatif dengan foreach : <br>";
    foreach($arrNIlai as $nama => $nilai){
        echo "Nilai $nama=$nilai<br>";
    }

    reset($arrNIlai);
    echo "<br>Menampilkan isi array asosiatif dengan WHILE  dan LIST : <br>";
    while(list($nama, $nilai)=each($arrNIlai)){
        echo "Nilai $nama=$nilai<br>";
    }
     