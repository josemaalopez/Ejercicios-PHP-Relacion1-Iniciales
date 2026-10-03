<?php
/* 17- Haz un script en PHP que calcule la división de dos números naturales
utilizando el algoritmo de Euclides para la división */
$dividendo = 23;
$divisor = 5;

if (is_int($dividendo) && is_int($divisor) && $dividendo >= 0 && $divisor > 0) {
    $cociente = 0;
    $resto = $dividendo;

    while ($resto >= $divisor) {
        $resto -= $divisor;
        $cociente++;
    }
    
    echo "$dividendo dividido entre $divisor da como cociente: $cociente y resto: $resto";
} else {
    echo "Los números no valen para la división natural.";
}
?>