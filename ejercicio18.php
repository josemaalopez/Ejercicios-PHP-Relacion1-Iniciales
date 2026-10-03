<?php
/* 18- Haz un programa en PHP que calcule el máximo común divisor de dos
números naturales utilizando el algoritmo de Euclides */
$a = 48;
$b = 18;

if (is_int($a) && is_int($b) && $a > 0 && $b > 0) {
    $original_a = $a;
    $original_b = $b;
    
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    
    echo "El máximo común divisor de $original_a y $original_b es: $a";
} else {
    echo "Los números tienen que ser naturales positivos.";
}
?>