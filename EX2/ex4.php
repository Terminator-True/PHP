<?php
//Fes una pàgina on a partir d’un formulari on es recull una temperatura i en quina escala està, ens fa la conversió.

function Conversio($graus,$convertir,$num)
{
    switch ($graus) {
        case  "Celsius":
            
            break;
        
        default:
            # code...
            break;
    }
}

if (isset($_GET["graus"]) && isset($_GET["convertir"]) && isset($_GET["num"]) ){
    $mes=$_GET["graus"];
    $convertir = $_GET["convertir"];
    $num=$_GET["num"];
    conversio($graus,$convertir,$num);

}
?>  