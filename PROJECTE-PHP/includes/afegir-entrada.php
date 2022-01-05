<style>
    #entrada textarea{
        border: 2px solid PaleTurquoise;
        background-color:Beige  ;
        width:86%;
        padding:20px;
    }
    #entrada img {
        width:25px;
    }
    #entrada input{
        border: 2px solid PaleTurquoise;
        width:91%;
        background-color:Beige;

    }
    #entrada button{
        width:15%;
        
    }
    #entrada select{
        color:white;
        background-color:LightPink;
        width: 91%;
        padding: 12px;
        border: 2px solid PaleTurquoise;
        border-radius: 4px; 
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }
</style>
<?php
session_start();
include "Funcionalitats/entrades.php";
if (isset($_POST["modifica"])) {
    $entrada=GetEntrada($_POST["id"]);
    $_SESSION["ruta"]="Funcionalitats/modifica.php";
    $_SESSION["titol"] = $entrada[3];
    $_SESSION["contingut"] = $entrada[4];
    $_SESSION["idEntrada"] = $entrada[0];
    header("Location: ../index.php ");
}


?>

<div id="entrada">    
    <form action=<?php print_r($_SESSION["ruta"]);?> method="post">
        <input type="text" name="title" value=<?php print_r($_SESSION["titol"]);?>>
        <input type="hidden" name="id" value=<?php print_r($_SESSION["idEntrada"]);?>>
        <textarea name="contingut" rows="5"><?php print_r($_SESSION["contingut"]);?></textarea>
        <select id="cat" name="categoria">
            <?php
                    include "../Funcionalitats/categories.php";
                    $categories=GetCategories();
                    for ($i=0; $i < count($categories); $i++) { 
                        echo "<option value='".$categories[$i]."'>".$categories[$i]."</option>";
                    }
            ?>
        </select><br>
        <button type="submit">Enviar</button>
    </form>
    <hr>
</div>