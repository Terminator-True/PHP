<?php
//Fes una pàgina on a partir d’un formulari on es recull una temperatura i en quina escala està, ens fa la conversió.

function Conversio($graus,$convertir,$num)
{ //Concatenem els graus que donem, amb els quals farem la conversió així sabrem quina formula utilitzar
    switch ($graus."TO".$convertir) {
        case 'CelsiusTOFarenheit':
            $resultat = ( $num * 9 / 5) + 32;
            break;

        case 'FarenheitTOCelsius':
            $resultat = ( $num - 32) * 5 / 9;
            break;

        case 'CelsiusTOKelvin':
            $resultat = $num + 273.15;
            break;

        case 'KelvinTOCelsius':
            $resultat = $num - 273.15 ;
            break;

        case 'KelvinTOFarenheit':
            $resultat = ($num - 273.15) * 9 / 5 + 32;
            break;

        case 'FarenheitTOKelvin':
            $resultat = ( $num - 32 )  * 5 / 9 + 273.15;
            break;
        default:
            $resultat = "Error";
            break;
        }
    echo $num." º ".$graus." = ".$resultat." º ".$convertir;

}

if (isset($_GET["Graus"]) && isset($_GET["convertir"]) && isset($_GET["num"]) ){
    $graus=$_GET["Graus"];
    $convertir = $_GET["convertir"];
    $num=floatval($_GET["num"]);
    Conversio($graus,$convertir,$num);

}
?>  