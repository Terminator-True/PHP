<?php

//Carrega els controladors
function autoload($class){
    require_once "controllers/".strlower($class).".php";
}

spl_autoload_register("autoload");



?>