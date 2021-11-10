<?php
 
session_start();

if (!isset($_SESSION["user"])) {
    $_SESSION["imprimir"]=$_SESSION["imprimir"]."On vas espabilat?";
    header("Location: index.php");
}

include 'header.php';
$arraySencers = []; // l'array de sencers és global
$aEn = []; // l'array associatiu també és global
 
function generaArray($mida) {
    global $arraySencers;
    for ($i=0; $i < $mida; $i++) { 
        $num=mt_rand(100,999);
        if (!in_array($num,$arraySencers)) {
            $arraySencers[] = $num;
        }else {
            $i=$i-1;
        }
    }
}

function printArray($a) {
    $j=0;
    echo "<ul>";
    for ($i=0; $i < count($a); $i++) { 
        if ($j==0) {
            echo "<li>";
        }
        $j++;
        echo $a[$i].",";
        if ($j==10) {
            echo "</li> <br>" ;
            $j=0;
        }
    }
    echo "</ul>";
}

generaArray(100);
print_r($arraySencers);
printArray($arraySencers);
function acabaEn($a) {
    global $aEn;
    $fila=[];
    for ($i=0; $i < 10; $i++) { 
        $fila=[];
        for ($j=0; $j < count($a); $j++) { 
            if (intval(substr(strval($a[$j]),-1))-$i==0) {  
                $fila[]=$a[$j];
            }
        }
        $aEn[]=$fila;
    }
}
acabaEn($arraySencers);

function mostraAcabaEn($aEn) {
    echo"--------------------------------------------- <br>";
    for ($i=0; $i < 10; $i++) { 
        echo"$i=>";
        print_r($aEn[$i]);
        echo "<br>";
    }
}
mostraAcabaEn($aEn);
function numGET($num) {
    global $arraySencers;
    if (!in_array($num,$arraySencers) && $num>100) {
        $arraySencers[] = $num;
    }else {
        echo "Número ja existent al array o menor de 3 xifres";
    }


}

?>
<br>
<form action="ex1.php" method="get" >
        Num:<input type="num" name="num"><br>
    <input type="submit" value="Si">
<?php

if (isset($_GET["num"])) {
    $num = $_GET["num"];
    numGET($num);

}

include 'footer.php';
