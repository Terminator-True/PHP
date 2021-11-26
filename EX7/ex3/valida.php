<?php
session_start();
$_SESSION["imprimir"]=[];
if (isset($_SESSION["nom"]) && isset($_SESSION["cognom"]) && isset($_SESSION["data"])) {
    
    $file = fopen("dades.csv","a+");
    $nom=$_POST["nom"];
    $cognom=$_POST["cognom"];
    $data_naixement=$_POST["data"];
    echo $nom.",".$cognom.",".$data_naixement."\n";
    fwrite($file,"\n".$nom.",".$cognom.",".$data_naixement."\n");
    fclose($file);
}

$file = fopen("dades.csv","r");
$final = $_SESSION["cursor"];
$acabat=FALSE;
while($acabat=FALSE) {
    $_SESSION["cursor"]++;
    if ($_SESSION["cursor"]<=$final+20) {
        array_push($_SESSION["imprimir"],fgets($file)."<br>");
    }elseif($_SESSION["cursor"]==$final) {
        $acabat=TRUE;
    }
}
fclose($file);
header("Location: index.php");
?>