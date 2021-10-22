<?php
session_start();
$inactiu = 60;
if (isset($_SESSION["timeout"])) {
    $limit= time() - $_SESSION["timeout"];
    if ($limit > $inactiu) {
        header("Location: logout.php");
    }
}
$_SESSION["timeout"]=time();


if (!isset($_SESSION["user"])) {
    $_SESSION["user"]="Joel";
    $_SESSION["imprimir"]="";
}

if (isset($_SESSION["user"]) && $_SESSION["imprimir"]=="Tot Correcte!") {
    print_r($_SESSION["imprimir"]);
    ?>
        <h1>Benvingut</h1>
        <button> <a href="logout.php"> Log out</a> </button>
    <?php
}else {
    print_r($_SESSION["imprimir"]);
    ?><form action="ej2.php" method="post" >
        Email:<input type="email" name="email"><br>
        Password:<input type="password" name="password">
    <input type="submit" value="Si">
    </form><?php
}
?>
