<?php

class NotaController {

    // El controlador encapsula accions
    // una acció de crear usuari, mostrar usuari, ...


    //fixem-nos el nom del mètode
    // carreguem el model
    // fem un usari nou
    // a una variable li assignem el resultat del
    // mètode aconseguir tots
    // carreguem a la vista


    public function mostrarTots(){

        require_once 'models/nota.php';

        $Nota = new Nota();
        $AllNotes=$usuari->aconseguirTots();

        require_once 'views/notes/mostrarTots.php';


    }
    public function Crear(){

        require_once 'models/nota.php';

        $Nota = new Nota();
        $Nota->setNom("Nota1");
        $Nota->setNota


    }
}
?>