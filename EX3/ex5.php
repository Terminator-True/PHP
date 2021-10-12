<?php
$color = array('c1' => 'Vermell', 'c2' => 'Verd', 'c3' => 'Blanc', 'c4' => 'Negre');
$claus = array("c2", "c4");
foreach ($claus as $value) {
    echo $color[$value],"|";
}
?>