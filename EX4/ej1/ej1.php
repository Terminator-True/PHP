<?php
session_start();
session_id();
$_SESSION["user"]="Joel";

if (isset($_POST["text"]) ){
    $imprimir="S'ha escrit <br>";
    $text=$_POST["text"];
    $acabat=FALSE;
    $i=0;
    $j=0;
    $pM=0;
    while (!$acabat) {
        if (is_numeric($text[$i])) {
            $imprimir=$imprimir."Conté números";
            $acabat=TRUE;
        }
        if ($i==strlen($text)-1 && !$acabat) {
            $imprimir=$imprimir."No Conté números";
            $acabat=TRUE;

        }
        if (count(explode(" ",$text))>1) {
            $Paraules=preg_split(" ",$text);
            if (strtoupper($Paraules[$j])==$Paraules[$j]) {
                $pM++;
            }
            $j++;
        }
        $i++;
    }
    $imprimir=$imprimir."<br>Paraules en majúscules: $pM";
}else {
    $imprimir="No s'ha escrit";
}

$_SESSION["imprimir"]=$imprimir;
#echo $_SESSION["imprimir"];
header("Location: /php-mp07/EX4/ej1/index.php");

?>
