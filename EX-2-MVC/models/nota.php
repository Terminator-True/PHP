<?php

require_once "modelBase.php";

class Nota extends ModelBase {

    private  $nom;
    private  $nota;

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

        return $this;
    }

}
?>