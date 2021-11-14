<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$UsuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');

if($id) {
    $UsuarioDao->delete($id);
}

header("Location: index.php");
exit;
?>