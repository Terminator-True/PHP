<?php
include "connect.php";
include "helpers.php";
session_start();
$servername = "localhost";
$username = "admin";
$password = "Admin@123";
$bd = "blog";
$_SESSION["imprimir"]="";
$mysqli = mysqli_connect($servername, $username, $password, $bd);

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
if (isset($_POST["email"]) && isset($_POST["nom"]) && isset($_POST["cognom"]) && isset($_POST["psw"])) {
    $error=mostraerorr($_POST['nom'],$_POST["cognom"],$_POST["email"],$_POST["psw"]);
    echo $error;
    if ($error=="") {
        $nom = $_POST['nom'];
        $cognom = $_POST["cognom"];
        $email = $_POST["email"];
        $psw = strval(password_hash($_POST["psw"],PASSWORD_DEFAULT));
        $sql = "INSERT INTO usuaris VALUES (null,'$nom','$cognom','$email','$psw',CURDATE());";
        if ($mysqli -> query($sql) === TRUE){
            $_SESSION["imprimir"]="Usuari creat Correctament!";
        }else {
            $_SESSION["imprimir"]="Error al crear l'usuari, intenta-ho de nou\n";
        }       
    }else {
        $_SESSION["imprimir"]=$error;
    }
}

header("Location: http://localhost/php-mp07/PROJECTE-PHP/index.php#  ");
?>