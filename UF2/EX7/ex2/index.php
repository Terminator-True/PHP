<!--Fer un programa php que et permeti pujar un arxiu en f
ormat imatge i mostrar-lo  (comprova que el format sigui una imatge)
-->

<form  action="valida.php" method="post" enctype="multipart/form-data">
    <input type="file" name="arxiu" id=""> 
    <input type="submit" value="Submit">

</form>

<?php
session_start();
if (!isset($_SESSION["imprimir"])) {
    $_SESSION["imprimir"]="";
}
print_r($_SESSION["imprimir"])
?>  
