<?php
include "connect.php";
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
if (isset($_POST["title"]) && isset($_POST["contingut"]) && isset($_POST["categoria"])) {
    $title=$_POST["title"];
    $contingut=$_POST["contingut"];
    $categoria=$_POST["categoria"];
    $idU=$_SESSION["id"];
    $sql="INSERT INTO entrades VALUES (NULL,$idU,(SELECT id FROM categories WHERE nombre='$categoria'),'$title','$contingut',CURRENT_DATE());";
    if ($mysqli -> query($sql) === TRUE){
        $_SESSION["imprimir"]="Entrada creada!";
    }else {
        $_SESSION["imprimir"]="Error al crear l'entrada\n".mysqli_error($mysqli);
    }       
}
header("Location: ../index.php ");

?>