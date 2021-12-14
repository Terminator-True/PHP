<style>
#alert {
        top:250px;
        position: absolute;
        padding: 20px;
        color: white;
        background-color:Tomato;
        border-radius: 50px;
        left:150px;
        }
</style>
<div id="alert">
    <?php print_r($_SESSION["imprimir"]);$_SESSION["imprimir"]="";?>
    <span class="closebtn" onclick="this.parentElement.style.display='none'";>&times;</span>
</div>