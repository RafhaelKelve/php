<?php
require 'config.php';

session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

    if($sql->rowCount() > 0) { 
        $dado = $sql->fetch();

        $_SESSION['id'] = $dado['id'];

        header("Location: index.php");
        exit;
    }
}

?>


<h1>Página de Login</h1>

<form method="POST">
    <label>
        Email: <br>
        <input type="email" name="email" required autofocus>
    </label><br><br>

    <label>
        Senha: <br>
        <input type="text" name="senha" required>
    </label><br><br>

    <input type="submit" value="Entrar">
</form>