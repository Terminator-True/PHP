<?php
require_once "models/form.php";
require_once "models/camp.php";

//Objecte utilitzat per a la validació del formulari
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
class form_controller{
    //Imprimeix el formulari de creació de formularis
    public static function Crea_form(){
        require_once "views/formulari.php";
    }
    //Valida el formulari y l'encapsula en un objecte form
    public static function Valida_form(){
        $form;
        if (isset($_POST["id"]) && isset($_POST["metod"]) && isset($_POST["action"]) && isset($_POST["num_camps"])) {
            $id=$_POST["id"];
            $metod=$_POST["metod"];
            $action=$_POST["action"];
            $num_camps=$_POST["num_camps"];
            if(validacio::validar_text($id) && validacio::validar_num($num_camps) && validacio::validar_arxiu($action)){
                $form = new form($id,$metod,$action,$num_camps);
            }
        }
        return $form;
    }
    //Imprimeix els formularis necessaris per crear els 
    //camps necessaris
    public static function Crea_camps($form){
        ?><form action="index.php" method="post"><?php
        for ($i=0; $i < $form -> getNum_camps(); $i++) { 
            include "views/camps.php";
        }
        ?><button type="submit" name="submit_camps">Submit</button>
        </form><?php
    }
    //valida els camps i retorna un array d'objectes
    //tipus camp amb la informaciód de cada camp
    public static function Valida_camps($form){
        $camps=array();
        for ($i=0; $i < $form -> getNum_camps(); $i++) { 
            if (isset($_POST["id_camp_".$i]) && isset($_POST["nom_camp_".$i]) && isset($_POST["value_camp_".$i]) && isset($_POST["metod_camp_".$i])) {
                $id=$_POST["id_camp_".$i];
                $nom=$_POST["nom_camp_".$i];
                $action=$_POST["value_camp_".$i];
                $metod=$_POST["metod_camp_".$i];
                $camps[]=new camp($id,$nom,$action,$metod);
            }
        }
        return $camps;
    }
    //Imprimeix els camps
    //Nota: No aconsegueixo saber perqué no funciona
    //M'ho podríes posar a la retroacció siusplau?
    //Merci :v
    public static function Imprimeix_camps($camps,$form){
        ?><form id="<?=$form -> getId()?>" action="<?=$form -> getAction()?>" method="<?=$form -> getMetod() ?>"><?php
        for ($i=0; $i < $form -> getNum_camps(); $i++) { 
            switch ($camps[$i] -> getMetod()) {
                case 'num':
                    include "views/num.php";
                case 'text':
                    include "views/text.php";
                case 'textArea':
                    include "views/textArea.php";
                case 'checkbox':
                    include "views/checkbox.php";
                case 'select':
                    include "views/select.php";
                case 'submit':
                    include "views/submit.php";
            }
            ?> <br> <?php
        }
        ?><button type="submit" name="submit_camps">Submit</button>
        </form><?php
    }
}

?>