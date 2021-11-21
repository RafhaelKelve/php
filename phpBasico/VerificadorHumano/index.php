<?php
session_start();

$n1 = rand(0,10);
$n2 = rand(0,10);
$_SESSION['v'] = $n1 + $n2;
?>

<form method="POST" action="verificador.php">
    <label for="ver"><strong>Quanto que é a soma de?</strong></label>

    <?=    '('.$n1; ?> + <?= $n2.')'; ?>
    <input type="number" name="n" id="ver" required>

    <input type="submit" value="Verificar">

</form>