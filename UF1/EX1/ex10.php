<?php
$num=$_GET["numero"];

function primer($primer){
    for($i = 2; $i < $primer; $i++){
        if ($primer%$i==0){
            return false;
        }
    }
    return true;
}

if(primer($num)){
    echo "El numero $num es primer";
    }
    else {
        echo "El numero $num No es primer";
    }

?>