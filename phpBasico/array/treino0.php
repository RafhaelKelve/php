<?php
    $bolo = array(
        'açucar',
        'farinha de trigo',
        'ovo',
        'leite',
        'fermento em pó'
    );

    $bolo2 = [
        'vasilha',
        'agua morna',
        ...$bolo,
        'corante'
    ];
    ?>

    <pre>

   <?php print_r($bolo2) ?>
    
    </pre>


