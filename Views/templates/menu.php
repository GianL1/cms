<nav>
    <ul>
        <?php foreach ($menu as $item): ?>
            <a href="<?php echo BASE_URL.$item['url']; ?>"><li><?php echo $item['nome']; ?></li></a>
        <?php endforeach ?>
    </ul>
</nav>
