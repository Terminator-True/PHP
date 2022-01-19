<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["Cancel"])) {
    header("Location: index.html ");
}

class validacio{
    
    public static $text_valid = "/[a-zA-Z]/i"; 
    public static $num_valid = 11;
    public static $arxiu_valid = "/.php$/";

    public static function validar_text($text){
        return preg_match(self::$text_valid,$text);
    }

    public static function validar_arxiu($arxiu){
        return preg_match(self::$arxiu_valid,$arxiu);
    }

    public static function validar_num($text){
        return self::$num_valid>$text;
    }
    
}
if (isset($_POST["id"]) && isset($_POST["metod"]) && isset($_POST["action"]) && isset($_POST["num_camps"])) {
    $id=$_POST["id"];
    $metod=$_POST["metod"];
    $action=$_POST["action"];
    $num_camps=$_POST["num_camps"];
    if (validacio::validar_text($id) && validacio::validar_num($num_camps) && validacio::validar_arxiu($action)) {
        require_once "../models/form.php";
        $form =  new form($id,$metod,$action,$num_camps);
    }else {
        echo "error";
    }


}


?>