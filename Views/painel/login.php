<form action="" method="post">
    <label>
        Email: <br>
        <input type="email" name="email" id="">
    </label><br><br>

    <label>
        Senha: <br>
        <input type="password" name="senha" id="">
    </label><br><br>

    <button type="submit">Logar !</button><br><br>

    <?php if(!empty($erro)){
        echo $erro;
    } ?>
</form>