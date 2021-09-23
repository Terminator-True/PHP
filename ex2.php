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
$j = 0;
echo "<tr>";
echo "<th>","do while","</th>";
do {
    $i++;
    if ($i%2==0) {
        echo "<td>",$i,"<td>";        
    }
}while ($i < 100);
echo "</tr>";

echo "<tr>","<br>","<th>","while","</th>";
while ($j < 100) {
    $j++;
    if ($j%2==0) {
        echo "<td>",$j,"<td>";        
    }
}
$i = 0;
echo "</tr>";
echo "<tr>","<br>","<th>","for","</th>";
for ($i=1; $i < 101; $i++) { 
    if ($i%2==0) {
        echo "<td>",$i,"<td>";       
    }
}
echo "</tr>";
//opino que el bucle més adient es el for, s'utilitza menys espai
?>
</table>
