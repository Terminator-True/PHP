<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["Cancel"])) {
    header("Location: index.html ");
}

class validacio{
    public function __construct(){
        static $text_valid = "/[a-zA-Z]/i";
        static $num_valid = "/[0-9]/i";
        static $arxiu_valid = "/([^\\]+)\.php$/i";
    }
    public static function validar_text($text){
        return preg_match(self::$text_valid,$text);
    }

    public static function validar_arxiu($arxiu){
        return preg_match(self::$arxiu_valid,$text);
    }

    public static function validar_num($num_valid){
        return preg_match(self::$num_valid,$text);
    }
    
}

class form{
    public function __construct($id,$metod,$action,$num_camps){
       $this -> id = $id;
       $this -> metod = $metod;
       $this -> action = $action;
       $this -> num_camps = $num_camps;
   }
}

if (isset($_POST["id"]) && isset($_POST["metod"]) && isset($_POST["action"]) && isset($_POST["num_camps"])) {
    $id=$_POST["id"];
    $metod=$_POST["metod"];
    $action=$_POST["action"];
    $num_camps=$_POST["num_camps"];

    if (validacio -> validar_text($id) && validacio::validar_num($num_camps) && validacio::validar_arxiu($action)) {
        echo "Correcte";
    }


}


?>