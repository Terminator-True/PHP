<?php
session_start();
//Funció que retorna true, si al utilitzar parse_url(serveix per separar la url per parts)
//retorna una array més llarga de 2, que significa que ja es una url funcional
function ComprovaUrl($web){return count(parse_url($web))>2;}

//comprovació dels camps obligatoris
if (isset($_POST["nom"]) && isset($_POST["pass"]) && isset($_POST["email"])) {
    $nom = $_POST["nom"];
    $passwd = $_POST["pass"];
    $email = $_POST["email"];
    if (!isset($_POST["idioma"])) {
        $_SESSION["imprimir"]["idioma"]="Cal escollir un idioma";
    }else {
        $_SESSION["imprimir"]["idioma"]="";
    }
    //comprovació dels camps no obligatoris
    if (isset($_POST["formacio"])) {
        $formacio = $_POST["formacio"];
    }
    if (isset($_POST["web"])) {
        $web = $_POST["web"];
        if (!ComprovaUrl($web)) {
            $_SESSION["imprimir"]["web"]="Url Incorrecte";
        }else {
            $_SESSION["imprimir"]["web"]="";
        }
    }
    //Validació de dades
    if (!preg_match("/[a-zA-Z]/i",$nom)) {
        $_SESSION["imprimir"]["nom"]="Nom Incorrecte";
    }else {
        $_SESSION["imprimir"]["nom"]="";
    }
    if (!preg_match("/^(?=.*?[a-zA-Z])(?=.*?[0-9])(?=.*?[-+*]).{8,}$/i",$passwd)) {
        $_SESSION["imprimir"]["pass"]="Password Incorrecte";
    }else {
        $_SESSION["imprimir"]["pass"]="";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["imprimir"]["email"]="Email Incorrecte";
    }else {
        $_SESSION["imprimir"]["email"]="";
    }
}
header("Location: /php-mp07/EX6/index.php");

?>