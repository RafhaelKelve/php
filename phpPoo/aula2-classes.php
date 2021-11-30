<?php

//classe
class Login {
    //atributo/paramêtro
    public $email;
    public $senha;

    //método
    public function Logar() {
        if($this->email == 'rafhaelkelve@hotmail.com' AND $this->senha == '1234567'):
            echo "Logado com sucesso!";
        else:
            echo "Usuario e/ou senha não encontrado!";
        endif;


    }
}
//instanciar
$usuario = new Login();

//atributo
$usuario->email = "rafhaelkelve@hotmail.com";
$usuario->senha = "1234567";

//usou o método
$usuario->Logar();


?>