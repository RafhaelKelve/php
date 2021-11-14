<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuario = false;

$UsuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');

if($id) {
    $usuario = $UsuarioDao->findById($id);
} 

if($usuario === false) {
    header("Location: index.php");
    exit;
}


?>

<h1><b><u>Editar Usuário</u></b></h1>
<hr>

<a href="index.php"><button style="background-color: blue; color: #ffffff;">VOLTAR</button></a>

<br><br>

<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?= $usuario->getId(); ?>">

    <label>
        NOME: <br>
        <input type="text" name="name" value="<?= $usuario->getNome(); ?>">
    </label> <br><br>

    <label>
        EMAIL: <br>
        <input type="email" name="email" value="<?= $usuario->getEmail(); ?>">
    </label> <br><br>

    <input type="submit" value="SALVAR">
</form>