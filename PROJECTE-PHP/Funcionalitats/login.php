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
    $sql = "SELECT * FROM usuaris WHERE email='$email';";
    $login = mysqli_query($db, $sql);
    print_r($_SESSION["login"]);
    if($login && mysqli_num_rows($login)==1) {

        // fa un array associatiu del usuari
        $usuari = mysqli_fetch_assoc($login);
        // Verifiquem el password
        if (password_verify($password,$usuari['password'])) {
            $_SESSION["login"]=1;
        }
    } 
}


#header("Location: http://localhost/php-mp07/PROJECTE-PHP/index.php#  ");
?>