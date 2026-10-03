<?php
/* 13- Haz un script PHP que calcule el factorial de un número natural (entero y
positivo). Haz que se muestren los cálculos que se van haciendo */
$n = 6;

if (is_int($n) && $n > 0) {
    $factorial = 1;
    echo "$n! = ";
    
    for ($i = $n; $i >= 1; $i--) {
        $factorial *= $i;
        echo $i;
        if ($i > 1) {
            echo " x ";
        }
    }
    echo " = $factorial";
} else {
    echo "Debe ser un número natural positivo.";
}
?>