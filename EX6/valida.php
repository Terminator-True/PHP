<?php
session_start();
//comprovació dels camps obligatoris
if (isset($_POST["nom"]) && isset($_POST["pass"]) && isset($_POST["idioma"]) && isset($_POST["email"])) {
    $nom = $_POST["nom"];
    $passwd = $_POST["pass"];
    $email = $_POST["email"]
    $idioma = $_POST["idioma"];
    //comprovació dels camps no obligatoris
    if (isset($_POST["formacio"])) {
        $formacio = $_POST["formacio"];
    }elseif (isset($_POST["web"])) {
        $web = $_POST["web"];
    }
    

}

?>