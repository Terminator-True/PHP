<?php
if (isset($_POST["text"]) ){
    echo "S'ha escrit";
    header("http:/localhost/php-mp07/EX4/ej1/index.php");
}else {
    
    echo "No s'ha escrit";
}

?>
