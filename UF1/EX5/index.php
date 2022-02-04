<?php
    include_once 'imports/header.php';
?>

<?php
    //Combrova cookies
    if (isset($_COOKIE['cookie_name'])) {
        echo "<p> ".$_COOKIE['cookie_name']."</p>";
    } else {
        echo "No existeix la cookie <br/><br/>";
    }
?>
<button onclick="window.location.href='ex1.php'" >Creem galetes</button>
<button onclick="window.location.href='ex1_2.php'" >Combrovar galetes</button>
<button onclick="window.location.href='ex1_3.php'" >Esborrem galetes</button>

<?php
    include_once 'imports/footer.php';
?>