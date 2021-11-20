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
            echo $tipus;
            if (!is_dir('images')) {
                mkdir('images',0777) ;
            } 
            
            echo "<h2> Imatge pujada correctament </h2>";
            move_uploaded_file($arxiu['tmp_name'], 'images/'.$nom_arxiu);
            $_SESSION["imprimir"]="<img src='images/".$nom_arxiu."'>";
    } else {
        echo "<h2> Tipus d'imatge incorrecte </h2>";
        header("refresh: 5; URL=index.php");
        
    }
    header("Location: index.php");
?>  