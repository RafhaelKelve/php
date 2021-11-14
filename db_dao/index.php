<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$UsuarioDao = new UsuarioDaoMysql($pdo);
$lista = $UsuarioDao->findAll();
?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a> 
<hr>
<br><br>



<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?= $usuario->getId(); ?></td>
            <td><?= $usuario->getNome(); ?></td>
            <td><?= $usuario->getEmail(); ?></td>
            <td>
                <a href="editar.php?id=<?= $usuario->getId(); ?>">[ EDITAR ]</a>
                <a href="excluir.php?id=<?= $usuario->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir este item?')">[ EXCLUIR ]</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>