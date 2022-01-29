<?php

class UsuariController {
    //mostra tots els usuaris de la base de dades
    public function mostrarTots(){

        require_once 'models/usuari.php';

        $usuari = new Usuari();
        $totsElsUsuaris=$usuari->aconseguirTots("usuaris")->fetch_array(MYSQLI_NUM);

        require_once 'views/usuaris/mostrarTots.php';


    }
    //Crida a un formulari que crea l'usuari
    public function crearUsuari() {

        require_once 'views/usuaris/crearUsuari.php';

    }

}
?>