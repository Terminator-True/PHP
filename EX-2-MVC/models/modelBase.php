<?php
require_once "config/database.php";
class ModelBase{

    public $db;

    public  function __construct(){
        $this->db=database::connect();
    }

    public function aconseguirTots($taula) {
        $query = $this->db->query("SELECT * FROM $taula ORDER BY id DESC");
        return $query;
    }
}

?>