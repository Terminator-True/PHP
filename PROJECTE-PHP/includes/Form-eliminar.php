<button href="#" onclick="document.getElementById('eliminar').style.display='block'" style="width:auto; background-color:Tomato;">Eliminar</button>

<div id="eliminar" class="modal">
    <span onclick="document.getElementById('eliminar').style.display='none'" class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="Funcionalitats\elimina-entrada.php" method="post">
    <div class="container">
        <h1>Segur que vols eliminar?</h1>
        <form action="Funcionalitats/elimina-entrada.php" method="post"><button style="width:100%;background-color:Tomato;" name="eliminar" type="submit">Si</button><?php echo '<input type="hidden" name="id" value='.$entrada[0].' >';?></form>

    </div>
  </form>
</div>


<script>
var modal_log = document.getElementById('eliminar');
// Si clickes fora del formulari desapareix
window.onclick = function(event) {
    if (event.target == modal_log) {
        modal_log.style.display = "none";
    }
}
</script>
