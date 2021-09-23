<?php
$n1=$_GET["numero1"];
$n2=$_GET["numero2"];

if ($n1 == $n2) {
    echo "Els números son iguals";
}else {
 if ($n1 > $n2) {
     $inici = $n2;
     $resultat = $n1-$n2;
     echo "Diferencia: ",$resultat-1,"<br>";
 }else {
     $inici = $n1;
     $resultat = $n2-$n1;
    echo "Diferencia: ",$resultat-1,"<br>";
 }       
}
for ($i=$inici; $i < $resultat; $i++) { 
    echo $i+1,"<br>";
}
?>