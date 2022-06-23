<?php
    $arrNilai=array("Fulan"=>80, "Budi"=>90, "Siti"=>75, "Jono"=>85);
    echo $arrNilai["Fulan"]. "<br>"; //80
    echo $arrNilai["Budi"]. "<br><br>"; //90

    $arrNilai=array();
    $arrNilai['Amin']=80;
    $arrNilai['Aman']=95;
    $arrNilai['Amen']=77;
    echo $arrNilai['Aman']. "<br>"; //95
    echo $arrNilai['Amin']. "<br>"; //80
?>