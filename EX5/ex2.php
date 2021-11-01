<?php
/*Fes una cookie que desa la data (time stamp)  de la darrera visita 
en la que un usuari ha estat a la nostra web, 
i que ens mostri quants segons, hores,  o dies fa de la seva darrera visita, 
en cas que sigui la primera vegada que ens visita, que aparegui un missatge de benvingut. 
(Fes una funció per fer els càlculs. 
Esbrina com php desa la informació en la funció time() per exemple)*/
    include_once 'imports/header.php';
    setcookie('cn', time(), time()+60);

    function TimeVisit($t){
        echo "minuts-segons desde la ultima visita: ",date("i-s",time()-$t);
    }

    if (isset($_COOKIE['cn'])) {
        TimeVisit($_COOKIE['cn']);
    }else{
        echo"<p>benvingut</p>";
    }
    include_once 'imports/footer.php';
?>