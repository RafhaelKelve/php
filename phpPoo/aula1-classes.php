<?php 

//classe
class Pessoa {
    //parametro/atributo
    public $nome;
    public $idade;

    //método/funções
    public function falar() {
        echo $this->nome." de ".$this->idade." ano, acabou de falar!";

    }
}

//objeto/instanciar
$rafhael = new Pessoa();
//atributo
$rafhael->nome = "Rafhael Kelve Cordeiro Lima";
$rafhael->idade = 29;

//usou o método
$rafhael->falar();