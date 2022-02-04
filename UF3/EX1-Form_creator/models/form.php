<?php
class form{
    public function __construct($id,$metod,$action,$num_camps){
        $this -> id = $id;
        $this -> metod = $metod;
        $this -> action = $action;
        $this -> num_camps = $num_camps;
    }
    //Getters
    public function getId(){
       return $this -> id;
    }
   
    public function getMetod(){
        return $this -> metod;
    }

    public function getAction(){
        return $this -> action;
    }

    public function getNum_camps(){
        return $this -> num_camps;
    }
    
    //Setters
    public function setId($id){
        $this -> id = $id ;
    }
    
    public function setMetod($metod){
        $this -> metod = $metod;
    }
 
    public function setAction($action){
        $this -> action = $action;
    }
 
    public function setNum_caps($num_camps){
        $this -> num_camps = $num_camps;
    }
}

?>