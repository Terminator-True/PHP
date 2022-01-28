<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images\ico2.svg" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>BlackLotus</title>
    <style>
        *{
font-family: 'Fuzzy Bubbles', cursive;
        }
        body{
            background-color:Beige;
        }
        .Caixa_principal{
            position: relative;
            margin:auto;
            margin-top:10px;
            background-color:PaleTurquoise;
            width:45%;
            padding:20px;
            box-shadow:1px 1px 5px black;

        }
        .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }

        .closebtn:hover {
        color: black;
        }

    </style>
    <?php
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION["imprimir"])) {
            $_SESSION["imprimir"]="";
        }
        if (!isset($_SESSION["login"])) {
            $_SESSION["login"]=0;
        }
        if (!isset($_SESSION["usuari"])) {
            $_SESSION["usuari"]="";
        }
        if (!isset($_SESSION["id"])) {
            $_SESSION["id"]=0;
        }
        if (!isset($_SESSION["ruta"])) {
            $_SESSION["ruta"]="Funcionalitats/comprova-entrada.php";
        }
        if (!isset($_SESSION["titol"])) {
            $_SESSION["titol"]="Titol";
        }
        if (!isset($_SESSION["contingut"])) {
            $_SESSION["contingut"]="Alguna cosa que dir?";
        }
        if (!isset($_SESSION["idEntrada"])) {
            $_SESSION["idEntrada"]=-3;
        }
        if (!isset($_SESSION["email"])) {
            $_SESSION["email"]="";
        }
        if (!isset($_SESSION["category_id"])) {
            $_SESSION["category_id"]=-2;

        }
        if (!isset($_SESSION["Print_entrades"])) {
            $_SESSION["Print_entrades"]=-1;
        }
            ?>
</head>
<body>
<!-- HEADER -->
<?php include "includes/header.php" ?>
<!-- MENU -->
<?php include "includes/menu.php" ?>
    <!-- CAIXA ESQUERRA -->
    <?php 
        include "includes/left.php";
    ?>
    <!-- CAIXA DRETA -->
    <?php include "includes/right.php" ?>
<!-- CAIXA PRINCIPAL -->
<div class="Caixa_principal">
    <!-- ENTRADES -->
        <?php   
            if ($_SESSION["login"]==1) {
                include "includes/afegir-entrada.php";
            }
        ?> 
        <?php
        include "Funcionalitats/entrades.php";
        $entrades=GetEntrades();
        for ($i=count($entrades)-1; $i > 0; $i--) { 
            $entrada = $entrades[$i];
            include "includes/entrada.php";
            /*
            if ($_SESSION["Print_entrades"]==$_SESSION["id"]) {
                if ($_SESSION["id"]==$entrada[1]) {
                    include "includes/entrada.php";                
                }
            }else if($_SESSION["category_id"]==$entrada[2]){
                include "includes/entrada.php";
            }else{
                include "includes/entrada.php";
            }*/
        }
        $_SESSION["Print_entrades"]=0;
        ?> 
        <!-- NOTIFICACIÓ -->
        <?php 
        if (!$_SESSION["imprimir"]=="") {
            if ($_SESSION["imprimir"]=="Usuari creat Correctament!" || $_SESSION["imprimir"]=="Entrada creada!" || $_SESSION["imprimir"]=="Categoría creada!" || $_SESSION["imprimir"]=="Entrada modificada!" ||  $_SESSION["imprimir"]=="Perfil modificat!" || $_SESSION["imprimir"]=="Entrada eliminada correctament!" ) {
                include "includes/notiSuccess.php";
            }else {
                include "includes/notiError.php";
            }   
        }?>
    </div>
<!-- FOOTER -->
<?php include "includes/footer.php"?>
</body>
</html>