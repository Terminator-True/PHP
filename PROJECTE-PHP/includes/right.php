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

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: white;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
}
</style>
<div class="right" >
    <h2>Categoríes</h2>
        <input type="text" id="mySearch" onkeyup="filtrar()" placeholder="Search.." title="Type in a category">
        <ul id="myMenu">
            <?php
                include "Funcionalitats/categories.php";
                $categories=GetCategories();
                for ($i=0; $i < count($categories); $i++) { 
                    echo "<li><a href='".$categories[$i]."'>".$categories[$i]."</a></li>";
                }
            ?>
        </ul>
    
    <script>
    function filtrar() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("mySearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myMenu");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
            } else {
            li[i].style.display = "none";
            }
        }
    }
</script>

</div>