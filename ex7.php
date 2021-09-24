<?php
$n1=$_GET["numero1"];
$n2=$_GET["numero2"];

if ($n1 == $n2) {
    echo "Els números son iguals";
}else {
 if ($n1 > $n2) {
     $inici = $n2;
     $final = $n1;
     echo "Diferencia: ",$n2,"y",$n1,":",$n1-$n2,"<br>";
 }else {
     $inici = $n1;
     $final = $n2;
    echo "Números entre: ",$n2,"y",$n1,":",$n2-$n1,"<br>";
 }       
}
for ($i=$inici; $i < $final; $i++) {
    if ($i%2!=0) {
        echo $i,"<br>";
    } 
}
?>