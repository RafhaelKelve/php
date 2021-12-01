<?php
/*
                    ***Explicação dos Modelos de Acesso***

Public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado como publico serão acessiveis por todos que quiserem acessá-los.

$carro = new Veiculo();
$carro->modelo = "fiat";

Protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos. Ou seja, posso usar o GET E O SET dentro e fora da classe.

$carro = new Veiculo();
$carro->setModelo("Fiat");
$carro->getModelo();

Private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível só e somente só pela classe que a declarou.  Ou seja, posso usar o GET E O SET só dentro da classe.

$carro = new Veiculo();
$carro->setModelo("Fiat");
$carro->getModelo();
*/

?>