<style>
#alert {
        top:250px;
        position: absolute;
        padding: 20px;
        color: white;
        margin-bottom: 15px;
        background-color:SpringGreen;
        border-radius: 50px;
        left:150px;
        }
</style>
<div id="alert">
    <?php print_r($_SESSION["imprimir"]);$_SESSION["imprimir"]="";?>
    <span class="closebtn" onclick="this.parentElement.style.display='none'";>&times;</span>
</div>