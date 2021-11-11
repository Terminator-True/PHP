<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari</title>
</head>
<body>
<?php
session_start();
 
$_SESSION["timeout"]=time();
if (!isset($_SESSION["imprimir"])) {
    $_SESSION["imprimir"]=array("nom"=>"","pass"=>"","formacio"=>"","idioma"=>"","email"=>"","web"=>"");
}
?>  
<form action="valida.php" method="POST">
    <fieldset>
        <legend>EX6-PHP:</legend>
                <p> 
                    <label for="nom">Nom:</label>
                    <input type="text" name="nom" />
                    <?php
                    print_r($_SESSION["imprimir"]["nom"]);
                    ?> 
                </p>
                <p> 
                    <label for="pass">Password:</label>
                    <input type="password" name="pass" required/>
                    <?php
                    print_r($_SESSION["imprimir"]["pass"]);
                    ?> 
                </p>
                <p> 
                    <label for="pass">Formació:</label>
                    <select id="formació" name="formacio">
                        <option value="ESO">ESO</option>
                        <option value="FP">FP</option>
                        <option value="BAT">BAT</option>
                    </select>
                </p>
                <p> 
                    <label for="idioma">Idiomes:</label>
                        <input type="radio" id="ca" name="idioma"/>
                        <label for="idioma">Catalá</label>
                        <input type="radio" id="es" name="idioma"/>
                        <label for="idioma">Español</label>
                        <input type="radio" id="en" name="idioma"/>
                        <label for="idioma">Anglès</label>
                        <input type="radio" id="fr" name="idioma"/>
                        <label for="idioma">Francés</label>
                        <input type="radio" id="al" name="idioma"/>
                        <label for="idioma">Alemà</label>
                        <?php
                            print_r($_SESSION["imprimir"]["idioma"]);
                        ?>
                </p>
                <p> 
                    <label for="email">Email: </label>
                    <input type="text" name="email" />
                    <?php
                        print_r($_SESSION["imprimir"]["email"]);
                    ?>
                </p>
                <p> 
                    <label for="web">Lloc web: </label>
                    <input type="text" name="web"/>
                    <?php
                        print_r($_SESSION["imprimir"]["web"]);
                    ?>
                </p>
                <p>
                    <input type="submit" value="enviar"/>
                </p>
    </fieldset>
</body>
</html>