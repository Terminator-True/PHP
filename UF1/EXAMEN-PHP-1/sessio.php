<?php
session_start();

$user = "alumne";
$passwd = "0000";


if (isset($_POST["pw"]) && isset($_POST["usuari"])) {
    $usuari=$_POST["usuari"];
    $pw=$_POST["pw"];

    if ($usuari == $user) {
        $_SESSION["user"]=$usuari;
    }
    if ($passwd == $pw) {
        header("Location: ex1.php");
    }else {
        $_SESSION["imprimir"]= $_SESSION["imprimir"]."Usuari no registrat o Password incorrecte";
        header("Location: index.php");
    }
}
?>