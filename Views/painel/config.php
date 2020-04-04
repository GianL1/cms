<h1>Configurações</h1>

<form action="" method="post" enctype="multipart/form-data">
    <label>
        Titulo do Site: <br>
        <input type="text" name="site_title" value="<?php echo $this->config['site_title'];?>">
    </label><br><br>

    <label>
        Texto de Boas Vindas: <br>
        <input type="text" name="home_welcome" value="<?php echo $this->config['home_welcome'];?>">
    </label><br><br>

    <select name="site_template">
        <option value="default" <?php echo ($this->config['site_template'] == 'default')?'selected="selected"':'';?>>Padrão</option>
        <option value="exemplo" <?php echo ($this->config['site_template'] == 'exemplo')?'selected="selected"':'';?>>Versão de Natal</option>
    </select><br><br>

    <label>
        Banner da Pagina Inicial: <br>
        <input type="file" name="home_banner">
    </label><br><br>
    <button type="submit">Alterar</button>
</form>