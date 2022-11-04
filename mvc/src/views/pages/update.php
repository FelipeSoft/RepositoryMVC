<?php $render('header'); ?> 
    <h3>Atualizar Usuário</h3>
    <form action="<?= $base ?>/users/<?= $usuario['id']; ?>/update" method="POST">
        <label> 
            Nome: <br>
            <input type="text" name="nameUpdate" value="<?= $usuario['name_user']; ?>">
        </label><br><br>

        <label>
            E-mail: <br>
            <input type="email" name="emailUpdate" value="<?= $usuario['email']; ?>">
        </label><br><br>

        <label>
            Senha: <br>
            <input type="text" name="passwordUpdate" value="<?= $usuario['password']; ?>">
        </label><br><br>

        <label>
            Permissão: <br>
            <select name="permissionUpdate">
                <option value="<?= $usuario['user_permission']; ?>"><?= $usuario['user_permission']; ?></option>
            </select>
        </label><br><br>

        <button>Atualizar</button>
    </form>
<?php $render('footer'); ?> 