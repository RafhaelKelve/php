<?php
    function somar($n1, $n2) {
        $total = $n1 + $n2;
        return $total;
    }

    $x = somar(8, 3);
    $y = somar(5, 3);
    $w = somar($x, $y);

    echo "A soma dos resustados é: " .$w;

?>