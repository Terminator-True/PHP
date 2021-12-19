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
if (isset($_POST["title"]) && isset($_POST["contingut"]) && isset($_POST["categoria"]) && isset($_POST["id"])) {
    $title=$_POST["title"];
    $contingut=$_POST["contingut"];
    $categoria=$_POST["categoria"];
    $id_entrada=$_POST["id"];
    $idU=$_SESSION["id"];
    $sql="UPDATE entrades SET categoria_id=(SELECT id FROM categories WHERE nombre='$categoria'),titol='$title',descripcio='$contingut',data=CURRENT_DATE() WHERE id= $id_entrada;";
    if ($mysqli -> query($sql) === TRUE){
        $_SESSION["imprimir"]="Entrada modificada!";
        $_SESSION["titol"]="Titol";
        $_SESSION["contingut"]="Alguna cosa que dir?";
        $_SESSION["ruta"]="Funcionalitats/comprova-entrada.php";
    }else {
        $_SESSION["imprimir"]="Error al crear l'entrada\n".mysqli_error($mysqli);

    }
}
header("Location: ../index.php ");

?>