<form action="index.php" method="post">
        <label for="id">Id del formulari</label>    
        <input type="text" name="id"><br> 
        <label for="metod">Mètode</label>
        <select name="metod"><br> 
            <option value="get">GET</option>
            <option value="post">POST</option>
        </select><br> 
        <label for="action">Action del formulari</label>
        <input type="text" name="action"><br> 
        <label for="num_camps">Número de camps</label>
        <input type="number" name="num_camps"><br>
        <button type="submit" name="submit_form">Submit</button>
        <button type="submit" name="Cancel">Cancel</button>
</form>