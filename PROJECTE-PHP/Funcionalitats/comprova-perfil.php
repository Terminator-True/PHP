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

if (isset($_POST["user"]) && isset($_POST["old_passwd"])) {
    $email=$_POST["user"];
    $password=$_POST["old_passwd"];
    $id=$_SESSION["id"];
    if (isset($_POST["new_passwd"])) {
        $comprovar_password=$_POST["new_passwd"];
        if (mostraerorr_passwd($comprovar_password)=="") {
            $new_password= strval(password_hash($comprovar_password,PASSWORD_DEFAULT)); 
        }else{
            $_SESSION["imprimir"].="Nou Password incorrecte ";
        }
    }
    $verify=$mysqli -> query("SELECT * FROM usuaris WHERE id='$id';");
    if($verify && mysqli_num_rows($verify)==1) {
        // fa un array associatiu del usuari
        $row = mysqli_fetch_assoc($verify);
        // Verifiquem el password
        if (password_verify($password,$row['password'])) {
            echo "hola";
            if (isset($new_password) && $new_password!="") {
                $sql="UPDATE usuaris SET email='$email',password='$new_password' WHERE id='$id';";
            }else{
                $sql="UPDATE usuaris SET email='$email' WHERE id='$id';";
            }
                if ($mysqli -> query($sql) === TRUE){
                $_SESSION["imprimir"]="Perfil modificat!";
            }
        }else {
            $_SESSION["imprimir"]="Pasword actual incorrecte";
        }
    }
}
header("Location: ../index.php ");

?>