<style>
    .right{
        float:right;
        margin: auto;
        margin-top:10px;
        margin-right:10px;
        background-color:PaleTurquoise;
        width:20%;
        padding:20px;
        box-shadow:1px 1px 5px black;
        color:white;
    }

#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
  background-color:LightPink;
}

#myMenu li button {
  padding: 12px;
  text-decoration: none;
  color: white;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
  color:black;
}

.right button{
    background-color:LightPink;
    padding:10px;
    color:white;
}
.right button:hover{
  background-color: #eee;
  color:black;


}
.right a{
    background-color:LightPink;
    padding:10px;
    color:white;
}
.right a:hover{
  background-color: #eee;
  color:black;
}
/*----------------- Formularis-----------------*/ 
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color:;
}

/* Set a style for all buttons */
.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: PaleTurquoise;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
  color:white;
}

input{
  background-color:white;
}

.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}
.categorias > button {
  background-color: LightPink;
  color: white;
  cursor: pointer;
  }
</style>
<div class="right" >
    <h2>Categoríes</h2>
    <?php 
        if ($_SESSION["login"]==1) {
            include "includes/afegir-categories.php";
        }
    ?>
<div id="category" class="modal">
    <span onclick="document.getElementById('category').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="Funcionalitats\comprova-categoria.php" method="post">
    <div class="container">
        <h1>Crea Categoría</h1>
      <label for="uname"><b>Nom de la categoría: </b></label>
      <input type="text" placeholder="Nom" name="nom" required>
      <button type="submit">Crear</button>
    </div>
  </form>
</div>
<div id="categorias"> 
        <input type="text" id="mySearch" onkeyup="filtrar()" placeholder="Search.." title="Type in a category">
        <form class="categorias" style="width:25%;" action="Funcionalitats/filtrar.php" method="post"><input type="hidden" name="id" value="0"><button type="submit">Restableix</button></form>
        <ul id="myMenu">
            <?php
                include "Funcionalitats/categories.php";
                $categories=GetCategories();
                $id_categories=GetCategories($nom=FALSE);
                for ($i=0; $i < count($categories); $i++) { 
                    echo '<li><form class="categorias" action="Funcionalitats/filtrar.php" method="post"><input type="hidden" name="id" value="'.$id_categories[$i].'" ><button type="submit">'.$categories[$i].'</button></form></li>';
                }
            ?>
        </ul>
</div>
    <script>
        var modal_category = document.getElementById('category');
        // Si clickes fora del formulari desapareix
        window.onclick = function(event) {
            if (event.target == modal_category) {
                modal_category.style.display = "none";
            }
        }

<<<<<<< HEAD
    function filtrar() {
        var input, filter, ul, li, button, i;
=======
     function filtrar() {
        var input, filter, ul, li, a, i;
>>>>>>> eb8e01966620f49ccc46b428608ed6dfe7e06c0a
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("button")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
            } else {
            li[i].style.display = "none";
            }
        }
    }
</script>
</div>