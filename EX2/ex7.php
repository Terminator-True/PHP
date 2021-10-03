<table>
<?php
//Fes un programa en php que pinti un tauler d’escacs per pantalla.

for ($i=0; $i < 9; $i++) { 
    echo "<tr>";
    for ($j=0; $j < 9; $j++) { 
        if ($i%2==0) {    
            if ($j%2==0) {
                echo "<td><div id='negre' style='width:50px; height: 50px; background-color: black;'></div></td>";
            }else{
                echo "<td><div id='white' style='width:50px; height: 50px; background-color: white;'></div></td> ";

            }
        }else {
            if ($j%2==0) {
                echo "<td><div id='white' style='width:50px; height: 50px; background-color: white;'></div></td> ";
            }else{
                echo "<td><div id='negre' style='width:50px; height: 50px; background-color: black;'></div></td>";

            }
        }
    }
    echo "</tr>";
}

?> 
</table>