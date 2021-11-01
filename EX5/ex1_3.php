<?php
    if (isset($_COOKIE["cn"])) {
        unset($_COOKIE["cn"]); 
        echo "cookie eliminada";   
        setcookie("cn",'',time()-100);   
}

    header('Location:ex1_2.php');
?>