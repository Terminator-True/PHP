    <h4>Camp Nº <?= $i?></h4>
    <label for="id">Id del camp</label>    
    <input type="text" name="id_camp_<?= $i?>"><br> 
    <label for="nom">Nom del camp</label>    
    <input type="text" name="nom_camp_<?= $i?>"><br> 
    <label for="valor">Valor per defecte</label>    
    <input type="text" name="value_camp_<?= $i?>"><br> 
    <select name="metod_camp_<?= $i?>"><br> 
            <option value="num">Numeric</option>
            <option value="text">Text</option>
            <option value="textArea">Text Area</option>
            <option value="checkbox">Checkbox</option>
            <option value="select">Select</option>
            <option value="submit">Submit</option>
    </select><br> <br>