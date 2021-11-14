<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$UsuarioDao = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {
    if($UsuarioDao->findByEmail($email) === false) {
        $novousuario = new Usuario();
        $novousuario->setNome($name);
        $novousuario->setEmail($email);

        $UsuarioDao->add( $novousuario );

        header("Location: index.php");
        exit;

    } else {
        header("Location: adicionar.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>