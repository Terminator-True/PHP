<?php
session_start();
$_SESSION["user"]="Joel";
if (isset($_SESSION["user"])) {
    printf($_SESSION["imprimir"]);

}
$_SESSION["imprimir"]="";
?><form action="ej1.php" method="post" >Text:<input type="text" name="text" pattern="[A-Za-z0-9 ]{2,}" title="Invalid input"></form><?php

?>
