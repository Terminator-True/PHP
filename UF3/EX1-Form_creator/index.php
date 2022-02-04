<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creador de Formularis</title>
    <style>
        form{
            padding: 5px;
        }
        input,select{
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php 
    require_once "controllers/form_controller.php";
    session_start();
    if (!isset($_SESSION["form"])) {
        $_SESSION["form"]="";
    }
    form_controller::Crea_form();
    if (isset($_POST["submit_form"])) {
        $form = form_controller::Valida_form();
        $_SESSION["form"]=$form;  
        form_controller::Crea_camps($form); 
    }
    if (isset($_POST["submit_camps"])) {
        form_controller::Imprimeix_camps(form_controller::Valida_camps($_SESSION["form"]),$_SESSION["form"]);
    }
  


?>
</body>
</html>