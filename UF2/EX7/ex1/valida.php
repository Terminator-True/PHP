<?php
session_start();

if(isset($_POST["data1"]) &&  isset($_POST["data2"])){
    $data1 = new DateTime($_POST["data1"]);
    $data2 = new DateTime($_POST["data2"]);
    if ($data1>$data2) {
        #Amb l'objecte diff, retornem la diferencia de la data, seguidament
        #li donem un format de string per poder imprimir-ho
        $interval=$data1->diff($data2);
        $_SESSION["imprimir"]=$interval->format("%d/%m/%Y %h:%i:%s");
    }else {
        $_SESSION["imprimir"]="Error, la segona data es més gran que la petita";
    }
}
header("Location: index.php");

?>  