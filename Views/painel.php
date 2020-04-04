<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL?>Assets/css/painel.css">
    <title>Painel Administrativo</title>
</head>
<body>
    <div class="menu">
        <ul>
            <a href=""><li>Páginas</li></a>
            <a href="<?php echo BASE_URL;?>painel/menus"><li>Menus</li></a>
            <a href="<?php echo BASE_URL;?>painel/logout"><li>Logout</li></a>
            <a href="<?php echo BASE_URL;?>painel/config"><li>Configurações</li></a>
        </ul>
    </div>

    <div class="container">
    
        <?php $this->loadViewInTemplate($view, $dados); ?>
    
    </div>

</body>
</html>