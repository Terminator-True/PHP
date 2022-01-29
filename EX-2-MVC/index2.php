<?php
echo "<h1>PHP MVC </h1>";

require_once 'controllers/notaController.php';

$controlador = new NotaController();
$controlador->mostrarTots();

// afegim crear Usuari

$controlador->CrearNota();

?>
