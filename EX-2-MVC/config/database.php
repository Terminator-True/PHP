<?php

//Conexió a la base dedades
class Database{
    
    public static function connect()
    {
        $host="localhost";
        $usuari="admin";
        $password="Admin@123";
        $db="notes_m7";

        $connect = new mysqli($host,$usuari,$password,$db);
        
        return $connect;
    }

}


?>