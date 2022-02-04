<?php 
$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$max = [];
$min = [];

for ($x=0; $x < count($temp) ; $x++) { 
    sort($temp);
    if (! in_array($temp[$x],$max) && count($max)<5) {
        array_push($max,$temp[$x]);
    }
    rsort($temp);
    if (! in_array($temp[$x],$min) && count($min)<5) {
        array_push($min,$temp[$x]);
    }
  }
echo "5 més fredes ",implode(" ",$min),"<br>";

echo "5 més calentes ",implode(" ",$max),"<br>";
?>