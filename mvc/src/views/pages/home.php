<?php $render('header') ?>
<button><a href="<?= $base; ?>/newUser">Novo Usuário</a></button>
<h2>Usuários listados</h2>
<table width="100%" border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Permissão</th>
        <th>Ações</th>
    </tr>   
        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td style="text-align:center;"><?= $usuario['id']; ?></td>
                <td style="text-align:center;"><?= $usuario['name_user']; ?></td>
                <td style="text-align:center;"><?= $usuario['email']; ?></td>
                <td style="text-align:center;"><?= $usuario['password']; ?></td>
                <td style="text-align:center;"><?= $usuario['user_permission']; ?></td>
                <td style="text-align:center;" style="display: flex; justify-content: space-evenly;">
                    <a href="<?= $base; ?>/users/<?= $usuario['id']; ?>/update">Editar</a>
                    <a href="<?= $base; ?>/users/<?= $usuario['id']; ?>/delete" onclick="return confirm('Deseja excluir este registro?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>

</table>

<?php $render('footer') ?>