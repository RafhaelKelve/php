<?php
/*Herança é um recurso que permite que classes compartilhem atributos e métodos, afim de reaproveitar códigos ou comportamentos generalizados*/
    class Veiculo {
        public $modelo;
        public $cor;
        public $ano;

        public function Andar() {
            echo "Andou";
        }
        public function Ligar() {
            echo "Ligou";
        }
    }

    class Carro extends Veiculo {

        public function ligarLimpador() {
            echo "Ligou o Limpador do carro";
        }
    }
    
    class Moto extends Veiculo {

        public function darGrau() {
            echo "Dando grau na moto";
        }
    }
    
echo '****CARRO****';
echo '<br>';
$carro = new Carro();
$carro->modelo = "Fiat";
$carro->cor = "Azul";
$carro->ano = 2018;

$carro->Ligar();
echo '<br>';
$carro->Andar();
echo '<br>';

echo '<pre>';
var_dump($carro);
echo '</pre>';

echo '<br>';

$carro->ligarLimpador();
echo '<br>';
echo '<br>';


echo '****Moto****';
echo '<br>';
$moto = new Moto();
$moto->modelo = "Honda";
$moto->cor = "Verde";
$moto->ano = 2021;

$moto->Ligar();
echo '<br>';
$carro->Andar();

echo '<br>';
echo '<br>';

echo '<pre>';
var_dump($moto);

echo '<br>';



$moto->darGrau();

?>