<?php
    $x = 3.0;
    $y = 4.0;
    $z = -5.0;
    $A; $B; $C;

    $A = sqrt($x);
    $B = sqrt($y);
    $C = sqrt(25.0);

    echo "A RAIZ QUADRADA DE " .$x. " = " . $A. "<br>";
    echo " A RAIZ QUADRADA DE " .$y. " = " .$B. "<br>";
    echo "A RAIZ QUADRADA DE 25 = " .$C. "<br><br><br>";

    $A = pow($x, $y);
    $B = pow($x, 2.0);
    $C = pow(5.0, 2.0);
    echo "$x elevado a $y = $A<br>";
    echo "$x elevado ao quadrado = $B<br>";
    echo "5 elevado ao quadrado é = $C<br><br><br>";

    $A = abs($y);
    $B = abs($z);
    echo "O VALOR ABSOLUTO DE $y = A $A<br>";
    echo "O VALOR ABSOLUTO DE $z = A $B";
    
?>