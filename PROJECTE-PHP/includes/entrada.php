<div class="card">
    <h1><?php print_r($entrada[3]); ?></h1>
    <p class="title"><?php print_r(GetUser($entrada[1])." | ".GetCategoria($entrada[2])." | ".$entrada[5]);?></p>
    <p><?php print_r($entrada[4]);?>
        <div style="margin: 24px 0;">
        <?php 
            session_start();
            if ($_SESSION["id"]==$entrada[1]) {
                echo '<form action="includes/afegir-entrada.php" method="post"><button style="width:15%;" name="modifica" type="submit">Modifica</button><input type="hidden" name="id" value="'.$entrada[0].'" ></form>';
            
            }
        ?>
    </div>
    <hr>
</div>
