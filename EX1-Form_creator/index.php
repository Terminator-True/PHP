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
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once "controllers/form_controller.php";
    form_controller::Crea_form();
    form_controller::Crea_camps();
?>
</body>
</html>