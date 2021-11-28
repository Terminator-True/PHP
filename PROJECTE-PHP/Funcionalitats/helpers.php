<?php
function mostraerorr($nom,$cognom,$email,$psw){
    $imprimir="";
    if (!preg_match("/[a-zA-Z]/i",$nom)) {
        $imprimir="Nom Incorrecte ";
    }
    if (!preg_match("/[a-zA-Z]/i",$cognom)) {
        $imprimir="Cognom Incorrecte ";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $imprimir="Email Incorrecte";
    }
    return $imprimir;
}

?>