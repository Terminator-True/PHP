<?php
session_start();
$arxiu =$_FILES['arxiu'];
$nom_arxiu = $arxiu['name'];
$tipus = explode(".",$nom_arxiu)[1];
print_r($arxiu);
if ( $tipus == "jpg"  || 
         $tipus == "jpeg" || 
         $tipus == "png"|| 
         $tipus == "PNG" ) {
            if (!is_dir('images')) {
                mkdir('images',0777) ;
            } 
            
            move_uploaded_file($arxiu['tmp_name'], 'images/'.$nom_arxiu);
            $_SESSION["imprimir"]="<img src='images/".$nom_arxiu."'>";
    } else {
        $_SESSION["imprimir"]="Tipus d'imatge incorrecte"
        header("Location: index.php");
        
    }
    header("Location: index.php");
?>  