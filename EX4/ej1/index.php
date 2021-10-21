
<?php

if (!isset($_SESSIO["user"])) {
    ?><form action="ej1.php" method="post" >Text:<input type="text" name="text" ></form><?php
}else
session_start();
$_SESSION["user"]="Joel";

?>
