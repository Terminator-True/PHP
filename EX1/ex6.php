<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border:solid black;
  text-align: left;


</style>
<table>

<?php
for ($i=0; $i < 11; $i++) { 
    echo "<tr>";
    for ($j=0; $j < 11; $j++) { 
        echo "<td>",$j,"x",$i,"=",$j*$i,"</td>","<td>";

    }
    echo "</tr>";
}

?>


</table>
