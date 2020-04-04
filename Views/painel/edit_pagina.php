<h1>Editar Página</h1>

<form action="" method="post">
    <label>
        Titulo da Página: <br>
        <input type="text" name="titulo" value="<?php echo $pagina['titulo']; ?>">
    </label><br><br>


    <label>
        URL: <br>
        <input type="text" name="url" value="<?php echo $pagina['url']; ?>">
    </label><br><br>

    <label>
        Corpo da Página: <br>
       <textarea name="corpo" id="corpo" cols="30" rows="10"><?php echo $pagina['corpo'];?></textarea>
    </label><br><br>

    
    <button type="submit">Editar</button>
</form>

<script src="<?php echo BASE_URL ?>ckeditor/ckeditor/ckeditor.js" type="text/javascript"></script>

<script type = "text/javascript">
    window.onload = function() {
        CKEDITOR.replace("corpo");
    }
</script>