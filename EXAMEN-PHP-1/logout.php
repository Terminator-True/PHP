<h1>Sessió Caducada</h1>
<?php

session_start();
session_destroy();
header("Location: index.php");

include 'footer.php';
?>