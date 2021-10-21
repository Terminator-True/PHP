<?php
session_start();
$inactiu = 60;
if (isset($_SESSION["timeout"])) {
    $limit= time() - $_SESSION["timeout"];
    if ($limit > $inactiu) {
        session_destroy();
        header("Location: logout.php");
    }
}
$_SESSION["timeout"]=time();
$_SESSION["imprimir"]="";

if (isset($_SESSION["user"])) {
    echo $_SESSION["imprimir"];
    ?>
        <h1>Benvingut</h1>
        <button> <a href="logout.php"> Log in</a> </button>
    <?php
}else {
    ?><form action="ej2.php" method="post" >Email:<input type="text" name="email" title="Invalid input"></form>
    <form action="ej2.php" method="post" >Password:<input type="password" name="password"  title="Invalid input"></form><?php
    $_SESSION["user"]="Joel";
}
?>
