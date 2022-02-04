<?php
/*Fes un programa amb php, que utilitzant una cookie tingui un comptador de visites 
durant les properes 24h. Per cada 5 visites apareixerà una estrella a sota el núm. de visites, 
amb un màxim de 3 estrelles.  */
    include_once 'imports/header.php';
    $v=1;
    $estrella="";
    if (isset($_COOKIE['cn'])) {
        $v+=(int) $_COOKIE['cn'];
        echo "Visites ",$v;
        echo '<br>';
        switch ($v) {
            case ($v>=5 && $v<10):
                $estrella="*";
                break;
            case ($v>=10 && $v<15):
                $estrella="**";
                break;
            case ($v>=15):
                $estrella="***";
                break;
            default:
                echo "<h1>benvingut</h1>";

        }
        echo $estrella;
    }
    setcookie('cn', $v, time()+60*60*24);


    include_once 'imports/footer.php';
?>