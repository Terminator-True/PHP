<?php

class NotaController {

    //Mostra totes les notes existents a la base de dades
    public function mostrarTots(){

        require_once 'models/nota.php';

        $Nota = new Nota();
        $AllNotes=$Nota->aconseguirTots("notes")->fetch_array(MYSQLI_NUM);
        require_once 'views/notes/mostrarTots.php';

    }

    public function CrearNota(){

        require_once 'models/nota.php';
        $Nota = new Nota();
        $Nota->setNom("Nota1");
        $Nota->setTitol("Hola");
        $Nota->setDescripcio("Hola, que tal");
        $Nota->setUsuari_id(1);

        print_r($Nota->desar());
        
        //require_once 'views/notes/mostraNota.php';


    }
}

$nota = new NotaController;
$nota->CrearNota()
?>