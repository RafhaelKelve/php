<?php
class Acesso {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($e) {
        //FILTRAR O EMAIL
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = strtolower($email);
    }

    public function getSenha() {
        return $this->senha;
    }
    public function setSenha($s) {
        $this->senha = ($s);
    }

    public function Logar() {
        if($this->email == 'rafhaelkelve@hotmail.com' AND $this->senha == '123456'):
            echo "Conectado com sucesso!";
        else:
            echo "Erro de conexão, dados invalidos!";
        endif;
    }
}

//instancia/objeto
$logar = new Acesso("rafhaelkelve@hotmail.com", "123456", "Rafhael Kelve");

//usa o método
$logar->Logar();

echo '<br><br>';

//pega/mostra os dados cadastrados
echo $logar->getEmail().'<br>';
echo $logar->getSenha().'<br>';
echo $logar->getNome();



?>