<?php
include "connect.php";
include "categories.php";
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

if (isset($_POST["nom"])){
    $nom=$_POST["nom"];
    if (!preg_match("/[a-zA-Z ]/i",$nom)) {
        $_SESSION["imprimir"].="Nom de categoría incorrecte ";
    }else {
            $sql="INSERT INTO categories VALUES (NULL,'$nom');";
            if ($mysqli -> query($sql) === TRUE){
                $_SESSION["imprimir"].="Categoría creada!";
            }else {
                $_SESSION["imprimir"].="Error al crear la categoría\n";
            }  
    }

}
header("Location: ../index.php ");
?>