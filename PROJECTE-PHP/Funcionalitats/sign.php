<?php
session_start();
$servername = "localhost";
$username = "admin";
$password = "Admin@123";
$bd = "blog";
$_SESSION["imprimir"]="";
$conn = new mysqli($servername, $username, $password, $bd);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["email"]) && isset($_POST["nom"]) && isset($_POST["cognom"]) && isset($_POST["psw"])) {
    $nom = $_POST['nom'];
    $cognom = $_POST["cognom"];
    $email = $_POST["email"];
    $psw = password_hash($_POST["psw"],PASSWORD_BYCRYPT, ['cost' =>4]);
    $sql = "INSERT INTO  usuaris VALUES(null,$nom,$cognom,$email,$psw,CURDATE());";
    if ($conn->query($sql) === TRUE) {
        $_SESSION["imprimir"]="Usuari creat Correctament!";
    }else {
        $_SESSION["imprimir"]="Error al crear l'usuari, intenta-ho de nou";
    }
}

$conn->close();
header("Location: http://localhost/php-mp07/PROJECTE-PHP/index.php#");
?>