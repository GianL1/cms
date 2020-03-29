<h1>Páginas</h1>

<table border="0" width="100%">
    <tr>
        <th align="left">ID</th>
        <th align="left">Titulo</th>
        <th align="left">Ações</th>
    </tr>


    <?php foreach ($paginas as $pagina): ?>
        <tr>
            <td><?php echo $pagina['id'];?></td>
            <td><?php echo $pagina['titulo'];?></td>
            <td><a href="">Editar</a> | <a href="">Excluir</a></td>
        </tr>
    <?php endforeach; ?>


</table>
