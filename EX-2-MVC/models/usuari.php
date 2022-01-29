<?php

require_once "modelBase.php";


class Usuari extends ModelBase {

    private  $nom;
    private  $cognoms;
    private  $email;
    private $password;

    //Setters & Getters
    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }



    public function getCognoms()
    {
        return $this->cognoms;
    }

 
    public function setCognoms($cognoms)
    {
        $this->cognoms = $cognoms;

        return $this;
    }
 
    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }


}
?>