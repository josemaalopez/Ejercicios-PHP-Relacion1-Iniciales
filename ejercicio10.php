<?php
/* 10- Haz un programa PHP que resuelva una ecuación de segundo grado
siempre que los resultados sean reales */
$a = 1;
$b = -5;
$c = 6;

$comprobacion = ($b ** 2) - (4 * $a * $c);

if ($discriminante >= 0) {
    $x1 = (-$b + sqrt($comprobacion)) / (2 * $a);
    $x2 = (-$b - sqrt($comprobacion)) / (2 * $a);
    echo "Las raíces reales son: x1 = $x1 y x2 = $x2";
} else {
    echo "La ecuación no tiene soluciones reales.";
}
?>