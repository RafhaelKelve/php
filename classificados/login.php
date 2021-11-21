<?php require 'pages/header.php'; ?>

<div class="container">
    <h1>Faça o Login bb!</h1>

    <?php

        require 'classes/usuarios.class.php';
        $u = new Usuarios();

        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];

            if($u->login($email, $senha)) {
                ?>
                    <script type="text/javascript">window.location.href="./";</script>
                <?php
            } else {
                ?>
                <div class="alert alert-danger">
                    Usuarios e/ou Senha errados!
                </div>
                <?php
            }

        }

    ?>

<form method="POST">
        <h1></h1>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div>


        <input type="submit" value="Entrar" class="btn btn-default">
    </form>

</div>






<?php require 'pages/footer.php'; ?>
