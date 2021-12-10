<div class="card">
    <h1><?php print_r($entrada[3]); ?></h1>
    <p class="title"><?php print_r(GetUser($entrada[1])." | ".GetCategoria($entrada[2][0])." | ".$entrada[5]);?></p>
    <p><?php print_r($entrada[4]);?>
        <div style="margin: 24px 0;">
        <button class="guardar">Més</button>
    </div>
</div>
