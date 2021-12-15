<?php
include "connect.php";
function GetCategories($nom=TRUE){
    $servername = "localhost";
    $username = "admin";
    $password = "Admin@123";
    $bd = "blog";
    $mysqli = mysqli_connect($servername, $username, $password, $bd);
    $cat=[];
    $categories=$mysqli -> query("SELECT nombre FROM categories;");
    for ($i=0; $i < $categories -> num_rows; $i++){ 
        if ($nom==TRUE){
            $cat[$i]=mysqli_fetch_row($categories)[0];
        }else{
            $cat[$i]=mysqli_fetch_row($categories);
        }
        
    }
    return $cat;
}
?>