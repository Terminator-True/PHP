<?php
session_start();

if (isset($_POST["password"]) && isset($_POST["email"])) {
    $_SESSION["email"]=$_POST["email"];
    $_SESSION["password"]=$_POST["password"];
    $psswd=FALSE;
    $email=FALSE;
    $matches=[];    
    if ($_SESSION["password"]=="1234") {
        $psswd=TRUE;
    }
    if (validate($_SESSION["email"])) {
        $email=TRUE;
    }
    if (!$psswd || !$email) {
        $imprimir=$imprimir."Password o email incorrectes";
    }else {
        $imprimir = $imprimir."Tot Correcte!";
    }
}

$_SESSION["imprimir"] = $imprimir;
echo "hola";

print_r(matches("@lacetania.cat",$_SESSION["email"],$matches));
#header("Location: /php-mp07/EX4/ej2/index.php");

?>