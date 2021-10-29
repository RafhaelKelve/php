<?php
    $lista = [
        'nome' => 'Rafael',
        'idade' => 29,
        'qualidade' => [
            'forca' => 60,
            'agilidade' => 80,
            'destreza' => 100
        ],
        'vida' => 1000,
        'honestidade' => 1000,
    ];

    echo "NOME: ".$lista['nome']."<br>";
    echo "FORCA: ".$lista['qualidade']['forca']."<br>";
    echo "VIDA: ".$lista['vida']."<br>";
    echo "AGILIDADE: ".$lista['qualidade']['agilidade']."<br>";
    echo "DESTREZA: ".$lista['qualidade']['destreza'];
    
?>