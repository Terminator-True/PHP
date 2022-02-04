<?php
session_start();
if(isset($_POST["id"])){
    $_SESSION["category_id"]=$_POST["id"];
}
if(isset($_POST["user_id"])){
    $_SESSION["Print_entrades"]=$_POST["user_id"];
}
header("Location: ../index.php ");

?>