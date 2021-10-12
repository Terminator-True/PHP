<?php
$color = array ('A' => 'Blau', 'B' => 'Verd', 'c' => 'Vermell');
$majusculas = [];
$minusculas = [];
foreach ($color as $key => $value) {
    array_push($majusculas,strtoupper($color[$key]));
    array_push($minusculas,strtolower($color[$key]));
}

echo "majusculas: ",implode(" ",$majusculas),"<br>","minusculas:",implode(" ",$minusculas);
?>