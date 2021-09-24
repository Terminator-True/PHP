<?php
$nom=$_GET["Nom"];
$edat=$_GET["Edat"];

if ($edat>=18) {
    echo "Ets major d'edad";
}else {
    echo "No ets major d'edad";

}
?>