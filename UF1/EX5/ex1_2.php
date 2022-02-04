<?php
    include_once 'imports/header.php';
?>

<?php
    if (isset($_COOKIE['cn'])) {
        echo "<p> ".$_COOKIE['cn']."</p>";
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