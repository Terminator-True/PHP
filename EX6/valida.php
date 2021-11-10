<?php
session_start();
//comprovació dels camps obligatoris
function ProcesaNom($nom){
    if (preg_match("/[a-zA-Z]/i",$nom)) {
        $_SESSION["imprimir"]["nom"]="Nom Incorrecte";
    }
}
if (isset($_POST["nom"]) && isset($_POST["pass"]) && isset($_POST["idioma"]) && isset($_POST["email"])) {
    $nom = $_POST["nom"];
    $passwd = $_POST["pass"];
    $email = $_POST["email"];
    $idioma = $_POST["idioma"];
    //comprovació dels camps no obligatoris
    if (isset($_POST["formacio"])) {
        $formacio = $_POST["formacio"];

    }
    if (isset($_POST["web"])) {
        $web = $_POST["web"];
    }
    ProcesaNom($nom);

}
header("Location: /php-mp07/EX6/index.php");

?>