<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Caixa_principal{
            position: relative;
            margin:auto;
            margin-top:10px;
            background-color:#708090;
            width:50%;
            padding:20px;
            height:500px;
            box-shadow:1px 1px 5px black;

        }
    </style>
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

    </div>
<!-- FOOTER -->
<?php include "includes/footer.php" ?>

</body>
</html>