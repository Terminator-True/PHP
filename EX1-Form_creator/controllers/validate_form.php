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

?>