<?php
//Fes una funció per calcular el factorial d’un número (utilitzant un bucle) que passem per URL.

function Factorial(int $num)
{   
    echo "!",$num,"=";
    for ($i=0; $i == $num ; $i++) { 
        $resultat=$num*$i;
        echo $i," ";
    }
}

if (isset($_GET["num"])) {
    $num=$_GET["num"];
}
?>