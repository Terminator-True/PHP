<?php
include "Funcionalitats\connect.php";

$servername = "localhost";
$username = "admin";
$password = "Admin@123";
$bd = "blog";
$mysqli = mysqli_connect($servername, $username, $password, $bd);

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
$nom = "admin";
$cognom = "-";
$email = "admin@email.com";
$psw = strval(password_hash("Admin@123",PASSWORD_DEFAULT));
$sql = "INSERT INTO usuaris VALUES (null,'$nom','$cognom','$email','$psw',CURDATE());";
if ($mysqli -> query($sql) === TRUE){
    echo "correcte" ;
}else {
    echo "incorrecte".$mysqli->error;
}
?>