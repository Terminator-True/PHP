<?php
include "connect.php";

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

$id=$_POST["id"];
$sql="DELETE FROM entrades WHERE id='$id'";
if ($mysqli -> query($sql) === TRUE){
    $_SESSION["imprimir"]="Entrada eliminada correctament!";
}else {
    $_SESSION["imprimir"]="Error al eliminar la entrada";

}
header("Location: ../index.php ");

?>