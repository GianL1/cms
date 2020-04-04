<h1>Adicionar Página</h1>

<form action="" method="post">
    <label>
        Titulo da Página: <br>
        <input type="text" name="titulo" ?>
    </label><br><br>


    <label>
        URL da Página: <br>
        <input type="text" name="url"  ?>
    </label><br><br>
    

    <label>
        Criar Menu Automaticamente: <br>

        <input type="checkbox" name="add_menu" value="sim">
    </label><br><br>


    <label>
        Corpo da Página: <br>
       <textarea name="corpo" cols="30" rows="10" id="corpo"></textarea>
    </label><br><br>

    
    <button type="submit">Adicionar</button>
</form>

<script src="<?php echo BASE_URL ?>ckeditor/ckeditor/ckeditor.js" type="text/javascript"></script>

<script type = "text/javascript">
    window.onload = function() {
        CKEDITOR.replace("corpo");
    }
</script>