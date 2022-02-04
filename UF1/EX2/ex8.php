
<?php
//Fes un programa per fer una calculadora amb botons
function Calculadora($funcio,$num1,$num2)
{   
    switch ($funcio) {
        case '+':
            $res=$num1+$num2;
        case '-':
            $res=$num1-$num2;
        case '*':
            $res=$num1*$num2;
        case '/':
            $res=$num1/$num2;
    }
    return $res;
}

if (isset( $_GET['num1']) && isset($_GET['num2']) && isset($_GET['funcio'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $funcio = $_GET['funcio'];
    echo Calculadora($funcio,$num1,$num2);
}

?>
