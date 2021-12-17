<style>
#alert {
        top:28%;
        width:280px;
        position: absolute;
        padding: 20px;
        color: white;
        background-color:Tomato;
        border-radius: 50px;
        left:120%;
        }
</style>
<div id="alert">
    <?php print_r($_SESSION["imprimir"]);$_SESSION["imprimir"]="";?>
    <span class="closebtn" onclick="this.parentElement.style.display='none'";>&times;</span>
</div>