<?php
    setcookie('cn', "galeta creada, caduca d'aquí 15s", time()+15);

    header('Location:ex1_2.php');
?>