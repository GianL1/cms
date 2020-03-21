<div class="home_banner" style="background-image:url('<?php echo BASE_URL.'Assets/images/'.$this->config['home_banner'];?>')"></div>
<div class="home_banner_txt"><?php echo $this->config['home_welcome'];?></div>
<div class="home_depo">
    <h3>Depoimentos de Clientes Satisfeitos</h3>
    <?php foreach($depoimentos as $depoimento) : ?>
        <strong><?php echo $depoimento['nome']; ?></strong><br>
        <?php echo $depoimento['texto']; ?>
        <hr>
    <?php endforeach; ?>
</div>
<div class="home_cta">
    Deseja conferir nossos Serviços ? <br>
    <a href="<?php echo BASE_URL?>servicos"><div>Conferir Nossos Serviços</div></a>
</div>