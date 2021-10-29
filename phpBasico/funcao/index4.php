<?php
    function somar($n1, $n2=0, $n3=0) {
        $total = $n1 + $n2 + $n3;
        return $total;
    }

    $x = somar(2);
    $y = somar(5, 3, 2);
    $w = somar($x, $y);


    echo "A soma dos resultado é: ".$w;

?>