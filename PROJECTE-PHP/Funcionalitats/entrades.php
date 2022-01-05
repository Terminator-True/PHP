<?php
include "connect.php";
function GetEntrades(){
    $servername = "localhost";
    $username = "admin";
    $password = "Admin@123";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $password, $bd);
    $en=[];
    $entrades=$mysqli -> query("SELECT * FROM entrades;");
    for ($i=0; $i < $entrades -> num_rows; $i++){ 
        $en[$i]=mysqli_fetch_row($entrades);
    }
    return $en;
}

function GetCategoria($id){
    $servername = "localhost";
    $username = "admin";
    $password = "Admin@123";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $password, $bd);
    $categoria=$mysqli -> query("SELECT nombre FROM categories WHERE id=$id;");
    return mysqli_fetch_row($categoria)[0];
}

function GetUser($id){
    $servername = "localhost";
    $username = "admin";
    $password = "Admin@123";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $password, $bd);
    $user=$mysqli -> query("SELECT nom FROM usuaris WHERE id=$id;");
    return mysqli_fetch_row($user)[0];
}

function GetEntrada($id){
    $servername = "localhost";
    $username = "admin";
    $password = "Admin@123";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $password, $bd);
    $entrada=$mysqli -> query("SELECT * FROM entrades WHERE id=$id;");
    return mysqli_fetch_row($entrada);
}
?>