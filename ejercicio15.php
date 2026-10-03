<?php
/* 15- Haz un programa php que te diga si un número entero y positivo es primo o no*/
$n = 29;
$es_primo = true;

if (is_int($n) && $n > 0) {
    if ($n == 1) {
        $es_primo = false;
    } else {
        // Lo he optimizado para que vaya iterando solo hasta la raiz cuadrada
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                $es_primo = false;
                break;
            }
        }
    }
    echo $es_primo ? "El número $n es primo." : "El número $n no es primo.";
} else {
    echo "Debe ser un número natural positivo.";
}
?>