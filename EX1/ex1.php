<?php
$string = "Hola";
$numero_enter = 2;
$booleana = TRUE;
$numero_decimal = 2.3;
$array = array("Joel","Farell","Cabrera");
$res = null;

//Objecte
class Casa
{
    private $finestres = 5;
    private $portes = 3;

    function mostrar()
    {
        echo "Tinc una casa amb $this->finestres finestres i $this->portes portes"; 
    }
}

$miCasa= new Casa;
$miCasa->mostrar();

?>

