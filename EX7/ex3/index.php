<!--
Fes un aplicatiu  en php que en un formulari demani nom, cognom i data de naixament dels usuaris,  
desa les dades en un arxiu dades.csv (que ja contindrà 100 línies com a dades fake) en format csv. 

Fes un enllaç a mostrar_dades:

llegir les dades de l’arxiu i mostrar-les en una taula de màxim 20 files, fes paginació. (Link inici, anterior - següent, fi) (<<  <  >  >>)
Hi ha d’haver 2 botons que mostren les dades ordenades o bé per cognoms o bé per nom
hi ha d’haver un formulari amb 2 inputs format data, i mostrar només els usuaris amb data de naixament entre aquestes dues dates

-->
<?php
session_start();
if (!isset($_SESSION["imprimir"])) {
    $_SESSION["imprimir"]=[];
    $_SESSION["cursor"]=0;

}

?>  

<form action="valida.php" method="post">
Nom: <input type="text" name="nom" ><br>
Cognom: <input type="text" name="cognom" ><br>
Data: <input type="datetime-local" name="data" ><br>

    <input type="submit" value="Submit">
    <br>
    <?php
        print_r($_SESSION["imprimir"])
    ?> 
<input type="button" value="<" name="esquerra"><input type="submit" value=">" name="dreta">

