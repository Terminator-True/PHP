<form action="" method="post">
    <h2>Camp Nº <?= $id ?></h2>
    <label for="id">Id del camp</label>    
    <input type="text" name="id"><br> 
    <label for="nom">Nom del camp</label>    
    <input type="text" name="nom"><br> 
    <label for="valor">Valor per defecte</label>    
    <input type="text" name="value"><br> 
    <select name="metod"><br> 
            <option value="num">Numeric</option>
            <option value="text">Text</option>
            <option value="textArea">Text Area</option>
            <option value="checkbox">Checkbox</option>
            <option value="select">Select</option>
            <option value="submit">Submit</option>
    </select><br> 
</form>