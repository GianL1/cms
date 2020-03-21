<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php ?>Assets/css/default.css">
    <title><?php echo $this->config['site_title']; ?></title>
</head>
<body>

    <div class="topo">
    
    </div>

    <div class="menu">
        <?php echo $this->loadMenu();?>
    </div>

    <div class="container">
    
        <?php $this->loadViewInTemplate($view, $dados); ?>
    
    </div>

    <div class="rodape">
    
    </div>
    
</body>
</html>