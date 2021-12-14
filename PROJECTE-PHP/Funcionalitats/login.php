<?php
include "connect.php";
include "helpers.php";
session_start();
$servername = "localhost";
$username = "admin";
$password = "Admin@123";
$bd = "blog";
$mysqli = mysqli_connect($servername, $username, $password, $bd);

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
if (isset($_POST["psw"]) && isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = $_POST["psw"]; 
    $login=$mysqli -> query("SELECT * FROM usuaris WHERE email='$email';");
    if($login && mysqli_num_rows($login)==1) {
        // fa un array associatiu del usuari
        $usuari = mysqli_fetch_assoc($login);
        $_SESSION["usuari"]=$usuari['nom']." ".$usuari['cognom'];
        // Verifiquem el password
        if (password_verify($password,$usuari['password'])) {
            $_SESSION["login"]=1;
            $_SESSION["id"]=$usuari["id"];

        }else {
            $_SESSION["imprimir"]="Pasword incorrecte";
        }
    }else {
        $_SESSION["imprimir"]="Usuari incorrecte";
    } 
}
header("Location: ../index.php ");
?>