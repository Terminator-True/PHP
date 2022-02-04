<?php
session_start();
$_SESSION["user"]="Joel";
if (isset($_SESSION["user"])) {
    printf($_SESSION["imprimir"]);  
}
$_SESSION["imprimir"]="";#El pattern, serviex per estipular les característiques permeses al input, en aquest cas
                         #totes les lletres tant majúscules i minúscules, números del 0 al 9 i amb dos o més carácters 
?><form action="ej1.php" method="post" >Text:<input type="text" name="text" pattern="[A-Za-z0-9 ]{2,}" title="Invalid input"></form><?php

?>
