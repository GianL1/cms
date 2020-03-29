<h1>Menus</h1>

<a href="<?php echo BASE_URL;?>painel/menus_add">Adicionar Menu</a><br><br>


<table border="0" width="100%">
    <tr>
        <th align="left">ID</th>
        <th align="left">Nome</th>
        <th align="left">URL</th>

        <th align="left">Ações</th>
    </tr>


    <?php foreach ($menus as $m): ?>
        <tr>
            <td><?php echo $m['id'];?></td>
            <td><?php echo $m['nome'];?></td>
            <td><?php echo $m['url'];?></td>
            <td><a href="<?php echo BASE_URL;?>painel/menus_edit/<?php echo $m['id'];?>">Editar</a> | <a href="<?php echo BASE_URL;?>painel/menus_del/<?php echo $m['id'];?>">Excluir</a></td>
        </tr>
    <?php endforeach; ?>


</table>
