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
$i = 0;
echo "<tr>","<br>","<th>","for","</th>";
for ($i=1; $i < 21; $i++) { 
    echo "<td>",$i*$i,"<td>";       
}
echo "</tr>";
echo "<tr>","<br>","<th>","while","</th>";
$i=0;
while ($i < 20) {
    $i++;
    echo "<td>",$i*$i,"<td>";       
}
echo "</tr>";
?>
</table>