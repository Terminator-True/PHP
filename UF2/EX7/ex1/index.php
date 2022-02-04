<!-- Escriviu un script PHP per obtenir diferències entre dos dates (introduïdes en un formulari)  en anys, 
mesos, dies, hores, minuts, segons. Verifiqueu que la primera data és més petita que la segona, sino mostra 
error.
-->
<?php

session_start();
if (!isset($_SESSION["imprimir"])) {
    $_SESSION["imprimir"]="";
}    
    ?>  

<form action="valida.php" method="post">
   Primera Data: <input type="datetime-local" name="data1" value="2013-10-24T20:36:10"><br>
   Segona Data:  <input type="datetime-local" name="data2" value="2013-10-24T20:36:10"><br>
<input type="submit" value="Submit">
<?php
print_r($_SESSION["imprimir"])
?>  


</form>