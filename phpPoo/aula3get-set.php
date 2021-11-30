<?php
class Login {
    private $email;
    private $senha;

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
$logar = new Login();

//seta os dados para ver se estão corretos
$logar->setEmail('rafhaelkelve@hotmail.com');
$logar->setSenha('123456');

//usa o método
$logar->Logar();

echo '<br><br>';

//pega/mostra os dados cadastrados
echo $logar->getEmail().'<br>';
echo $logar->getSenha();



?>