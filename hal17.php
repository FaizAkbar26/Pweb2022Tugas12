<?php
    //fungsi dengan return value, & parameter
    function luas_lingkaran($jari){
        return 3.14*$jari*$jari;
    }

    //pemanggilan fungsi
    $r=10;
    echo "Luas lingkaran dengan jari-jari $r adalah : ";
    echo luas_lingkaran($r);
?>