<?php

require_once "modelBase.php";

class Nota extends ModelBase {

    private  $nom;
    private  $titol;
    private $descripcio;
    private $usuari_id;


    //Setter & Getter
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTitol()
    {
        return $this->titol;
    }

    public function setTitol($titol)
    {
        $this->titol = $titol;
    }

    public function getDescripcio()
    {
        return $this->descripcio;
    }

    public function setDescripcio($descripcio)
    {
        $this->titol = $descripcio;
    }

    
    public function getUsuari_id()
    {
        return $this->usuari_id;
    }

    public function setUsuari_id($usuari_id)
    {
        $this->usuari_id = $usuari_id;

    }
    //Métodes
    
    //Guarda la nota a la base de dades
    public function desar(){
        $sql = "INSERT INTO notes VALUES (NULL,'{$this->usuari_id}', '{$this->titol}', '{$this->descripcio}', CURRENT_DATE());";
        return $this->db->query($sql);
    }

}
?>