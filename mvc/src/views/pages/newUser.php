<?php $render('header'); ?> 
    <h3>Adicionar Usuário</h3>
    <form action="<?= $base ?>/newUser" method="POST">
        <label> 
            Nome: <br>
            <input type="text" name="name">
        </label><br><br>

        <label>
            E-mail: <br>
            <input type="email" name="email">
        </label><br><br>

        <label>
            Senha: <br>
            <input type="password" name="password">
        </label><br><br>

        <label>
            Permissão: <br>
            <select name="permission">
                <option value="Comum">Comum</option>
                <option value="Administrador">Administrador</option>
            </select>
        </label><br><br>

        <button>Adicionar</button>
    </form>
<?php $render('footer'); ?> 