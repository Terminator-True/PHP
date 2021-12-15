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

include "../Funcionalitats/entrades.php";
if (isset($_POST["modifica"])) {
    $entrada=GetEntrada($_POST["id"]);
    $ruta="../Funcionalitats/modifica.php";
    $titol = $entrada[3];
    $contingut = $entrada[4];
}else {
    $ruta="../Funcionalitats/comprova-entrada.php";
    $titol="Titol";
    $contingut="Alguna cosa que dir?";
}

?>

<div id="entrada">    
    <form action=<?php echo "$ruta";?> method="post">
        <input type="text" name="title" value=<?php echo "$titol";?>>
        <textarea name="contingut" rows="5"><?php echo "$contingut";?></textarea>
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