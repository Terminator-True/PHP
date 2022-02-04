<?php
class camp{
    public function __construct($id,$nom,$valor,$metod){
        $this -> id = $id;
        $this -> nom = $nom;
        $this -> valor = $valor;
        $this -> metod = $metod;

    }
    //Getters
    public function getId(){
       return $this -> id;
    }
   
    public function getNom(){
        return $this -> nom;
    }

    public function getValor(){
        return $this -> valor;
    }
    public function getMetod(){
        return $this -> metod;
    }

    //Setters
    public function setId($id){
        $this -> id = $id ;
    }
    
    public function setNom($nom){
        $this -> nom = $nom;
    }
 
    public function setValor($Valor){
        $this -> action = $action;
    }
    public function setMetod($metod){
        $this -> $metod = $metod;
    }
}

?>