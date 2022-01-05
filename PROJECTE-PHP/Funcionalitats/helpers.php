<?php
function mostraerorr($nom,$cognom,$email,$psw){
    $imprimir="";
    if (!preg_match("/[a-zA-Z]/i",$nom)) {
        $imprimir=$imprimir."Nom Incorrecte ! ";
    }
    if (!preg_match("/[a-zA-Z]/i",$cognom)) {
        $imprimir=$imprimir."Cognom Incorrecte ! ";
    }
    if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/i",$psw)) {
        $imprimir=$imprimir."Password Incorrecte ! ";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $imprimir=$imprimir."Email Incorrecte ! ";
    }
    return $imprimir ;
}

function mostraerorr_passwd($psw){
    $imprimir="";
    if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/i",$psw)) {
        $imprimir=$imprimir."Password Incorrecte ! ";
    }
    return $imprimir ;
}
?>