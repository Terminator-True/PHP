<?php
//Fes una funció per comprovar si un string està en minúscules (utilitza només les funcions que hem après a classe)

function minuscules($paraula){
    return $paraula != strtoupper($paraula);
}

$paraula = "paraula";
if (minuscules($paraula)) {
    echo "Está escrita en minúscules";
}else {
    echo "Está escrita en majúscules";
}
?> 