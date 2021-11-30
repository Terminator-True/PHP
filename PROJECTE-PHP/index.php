<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images\ico2.svg" type="image/icon type">
    <title>BlackLotus</title>
    <style>
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
            height:500px;

        }
        /* The alert message box */

        /* The close button */
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

        /* When moving the mouse over the close button */
        .closebtn:hover {
        color: black;
        }
    </style>
    <?php
        session_start();
        if (!isset($_SESSION["imprimir"])) {
            $_SESSION["imprimir"]="";
        }
        if (!isset($_SESSION["login"])) {
            $_SESSION["login"]=0;
        }
        if (!isset($_SESSION["usuari"])) {
            $_SESSION["usuari"]="";
        }
            ?>  
</head>
<body>
<!-- HEADER -->
<?php include "includes/header.php" ?>
<!-- MENU -->
<?php include "includes/menu.php" ?>
    <!-- CAIXA ESQUERRA -->
    <?php include "includes/left.php" ?>
    <!-- CAIXA DRETA -->
    <?php include "includes/right.php" ?>
<!-- CAIXA PRINCIPAL -->
<div class="Caixa_principal">
        <!-- NOTIFICACIÓ -->
        <?php 
        if (!$_SESSION["imprimir"]=="") {
            if ($_SESSION["imprimir"]=="Usuari creat Correctament!") {
                include "includes/notiSuccess.php";
            }else {
                include "includes/notiError.php";
            }
            }?>

    </div>
<!-- FOOTER -->
<?php include "includes/footer.php" ?>

</body>
</html>