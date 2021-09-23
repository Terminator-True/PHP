<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 15%;
}

td {
  border:solid black;
  text-align: left;


</style>
<table>
    
<?php
$n1=$_GET["numero1"];
$n2=$_GET["numero2"];

echo "<tr>";
echo "<th>","Taula de multiplicar de cada numero","</th>";
for ($i=0; $i < 11; $i++) { 
    echo "<tr>","<td>",$n1,"x",$i,"=",$n1*$i,"</td>","<td>",$n2,"x",$i,"=",$n2*$i,"<td>","</tr>";
}

echo "<th>","Operacions","</th>","<tr>","<td>",$n1,"x",$n2,"=",$n1*$n2,"</td>","</tr>","<tr>","<td>",$n1,"/",$n2,"=",$n1/$n2,"</td>","</tr>","<tr>","<td>",$n1,"%",$n2,"=",$n1%$n2,"</td>","</tr>","<tr>","<td>",$n1,"-",$n2,"=",$n1-$n2,"</td>","</tr>","<tr>","<td>",$n1,"+",$n2,"=",$n1+$n2,"</td>","</tr>","<tr>","<td>",$n1,"^",$n2,"=",$n1**$n2,"</td>","</tr>","<tr>","<td>",$n1,"÷",$n2,"=",intdiv($n1,$n2),"</td>","</tr>";


?>

</table>