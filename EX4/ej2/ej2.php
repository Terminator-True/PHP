<?php
session_start();
$imprimir="";

if (isset($_POST["password"]) && isset($_POST["email"])) {
    $mail=$_POST["email"];
    $password=$_POST["password"];
    $psswd=FALSE;
    $email=FALSE;
    if ($password=="1234") {
        $psswd=TRUE;
    }#Retorna 1 si al string email hi ha la cadena @lacetania.cat sino
     #retornará 0
    if (preg_match("/@lacetania.cat/i",$mail)==1) {
        $email=TRUE;

    }
    if (!$psswd || !$email) {
        $imprimir=$imprimir."Password o email incorrectes";
    }else {
        $imprimir = $imprimir."Tot Correcte!";
    }
}

$_SESSION["imprimir"] = $imprimir;
header("Location: /php-mp07/EX4/ej2/index.php");

?>