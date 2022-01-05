<style>
    a{
        text-decoration: none;
        color:black;
    }
</style>
<div id="Perfil" class="modal">
    <span onclick="document.getElementById('Perfil').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="Funcionalitats\comprova-perfil.php" method="post">
    <div class="container">
        <h1>Dades</h1>
      <label for="uname"><b>Usuari: </b></label>
      <input type="text" value=<?php print_r($_SESSION["email"]) ?> name="user" required>
      <label for="uname"><b>Password: </b></label>
      <input type="password" placeholder="Password" name="old_passwd" required>
      <label for="uname"><b>Nou Password: </b></label>
      <input type="password" placeholder="Nou Password" name="new_passwd">
      <button type="submit">Canviar</button>
    </div>
  </form>
</div>
<h1>Welcome<br> <?php print_r($_SESSION['usuari'])?> </h1>  
<button> <img src="images/user.png" alt=""><a href="#" onclick="document.getElementById('Perfil').style.display='block'" style="width:auto;">Canviar Perfil</a></button>
<form action="Funcionalitats/filtrar.php" method="post"><input type="hidden" name="user_id" value="<?php print_r($_SESSION["id"]) ?>"><button type="submit"><img src="images/entrades.png" alt=""> Les meves entrades</button></form>

<script>
        var modal_category = document.getElementById('category');
        // Si clickes fora del formulari desapareix
        window.onclick = function(event) {
            if (event.target == modal_category) {
                modal_category.style.display = "none";
            }
        }
</script>