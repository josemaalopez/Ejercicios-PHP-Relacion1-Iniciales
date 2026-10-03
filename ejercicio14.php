<?php
/* 14- Haz un programa PHP que calcule la suma de los n primeros números
naturales (siendo n entero y positivo) */
$n = 10;

if (is_int($n) && $n > 0) {
    $suma = 0;
    for ($i = 1; $i <= $n; $i++) {
        $suma += $i;
    }
    echo "La suma de los primeros $n números naturales es: $suma";
} else {
    echo "Debe ser un número natural positivo.";
}
?>