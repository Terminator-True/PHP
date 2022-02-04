<?php
$escola = [[1,14,8,3],[6,19,7,2],[3,13,4,1]];
function comptarTotalAlumnes($escola)
{
    $total = 0;
    foreach ($escola as $key => $value) {
        $total=$total+array_sum($value);
    }
    echo "Total de alumnes: ",$total;
}
function comptarTotalAlidioma($escola){
    $totalIdiomes = [];
    $totalIdiomes["angles"]=0;
    $totalIdiomes["frances"]=0;
    $totalIdiomes["alemany"]=0;
    $totalIdiomes["rus"]=0;
    foreach ($escola as $si => $nivell) {
        foreach ($nivell as $key => $value) {
            switch ($key) {
                case 0:
                    $totalIdiomes["angles"]+=$value;
                case 1:
                    $totalIdiomes["frances"]+=$value;
                case 2:
                    $totalIdiomes["alemany"]+=$value;
                case 3:
                    $totalIdiomes["rus"]+=$value;
            }       
        }
    }
    print_r($totalIdiomes);
}
comptarTotalAlumnes($escola);
comptarTotalAlidioma($escola);
?>