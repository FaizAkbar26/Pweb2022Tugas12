<?php
    $arrNilai=array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);
    echo "<B>Array sebelum diurutkan</B>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";

    ksort($arrNilai);
    reset($arrNilai);
    echo "<B>Array setelah diurutkan dengan ksort()</B>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";

    krsort($arrNilai);
    reset($arrNilai);
    echo "<B>Array setelah diurutkan dengan krsort()</B>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
?>