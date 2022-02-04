<?php
//Utilitzant un array de 2 dimensions amb el mesos i el nombre de dies corresponent. 
//Fes una funció que donat un mes que passem per get ens digui quants dies té. Les dades provindran d’un formulari on amb un select tries el mes.

$any=[[31,"Gener"],[29,"Febrer"],[31,"Març"],[30,"Abril"],[31,"Maig"],[30,"Juny"],[31,"Juliol"],[31,"Agost"],[30,"Septembre"],[31,"Octubre"],[30,"Novembre"],[31,"Desembre"]];

function ImprimirMes($any,$mes)
{
    echo "El mes de ",$any[$mes][1]," te ",$any[$mes][0]," dies";    
}
if (isset($_GET["mes"]) ){
    $mes=$_GET["mes"];
    ImprimirMes($any,$mes);

}

?>  