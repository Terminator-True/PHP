<?php
//Fes una funció per comprovar si un string és un palíndrom o no.

function FunctionName($paraula)
{
    return $paraula == strrev($paraula);
}

if (FunctionName("ala")){
   echo "Si es palindrom"; 
}else {
    echo "No es palindrom";
}
?> 
