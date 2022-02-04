<?php
//Fes una funció per calcular l’àrea d’un rectangle, tenint en compte que la mida dels costats es passa per get. 
//Fes una versió amb echo dins la funció i una altra amb  return.

//ex2.php?w=10&h=10
function Area($w,$h){
 echo "Cuadrat amb dimensions: ",$w,"x",$h," àrea:",$w*$h ;
}

if (isset($_GET["w"]) && isset($_GET["h"])) {
    $w=$_GET["w"];
    $h=$_GET["h"];
    Area($w,$h);

}       

?>  