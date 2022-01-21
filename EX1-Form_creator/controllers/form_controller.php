<?php
class form_controller{

    public static function Crea_form(){
        require_once "views/formulari.php";
    }

    public static function Valida_form(){
        require_once "validate_form.php";
        require_once "models/form.php";
        if (isset($_POST["id"]) && isset($_POST["metod"]) && isset($_POST["action"]) && isset($_POST["num_camps"])) {
            $id=$_POST["id"];
            $metod=$_POST["metod"];
            $action=$_POST["action"];
            $num_camps=$_POST["num_camps"];
            if(validacio::validar_text($id) && validacio::validar_num($num_camps) && validacio::validar_arxiu($action){
                $form = new form($id,$metod,$action,$num_camps)
                return $form;   
            }
        }
    }
    public static function Crea_camps(){
        $form = form_controller::Valida_form()
        for ($i=0; $i < $form -> num_camps; $i++) { 
            require_once "views/camps.php";
        }
        
    }
}

?>