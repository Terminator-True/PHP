<?php
/*Fes un formulari php amb 2 input de tipus select que permeti escollir 
el color de fons de la pàgina i el color del text. Aquest colors s’ha de guardar en dues cookies,  
de manera que quan tornem a carregar la pàgina recordi els colors. 
El color de fons per defecte és blanc, i el text negre. 
El programa no ha de permetre escollir el mateix color de fons que de text. */

    include_once 'imports/header.php';
?>

<form action="" method="post" >
<label for="lletra">lletra:</label>
<select name="lletra" id="lletra">
  <option value="black">black</option>
  <option value="yellow">yellow</option>
  <option value="green">green</option>
  <option value="red">red</option>
</select>

<br>
<label for="fons">fons:</label>
<select name="fons" id="fons">
  <option value="white">white</option>
  <option value="yellow">yellow</option>
  <option value="green">green</option>
  <option value="red">red</option>
</select>
<input value="Si" type="submit">
</form>

<?php
if (isset($_POST['lletra']) && isset($_POST['fons'])){
  if ($_POST['lletra'] != $_POST['fons']) {
      //Agfegim el style directament a la línea del body
    $style="color:".$_POST['lletra'].";"."background-color:".$_POST['fons'].";";
    echo '<body style=',$style,'>';

    setcookie('lletra', "lletra", time()+10);
    setcookie('fons', "fons", time()+10);
  }
} else {
  echo "Error: Not found color<br>";
}

    include_once 'imports/footer.php';
?>