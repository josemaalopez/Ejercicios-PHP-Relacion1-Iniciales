<?php
/* 12 - Realiza un programa php que, a partir de una nota numérica entera entre
1 y 10 devuelva: */
$nota = 7;

if (is_int($nota) && $nota >= 1 && $nota <= 10) {
    switch ($nota) {
        // Sobresaliente si es 9 ó 10
        case 9:
        case 10:
            echo "Sobresaliente";
            break;
        // Notable si es 7 u 8
        case 7:
        case 8:
            echo "Notable";
            break;
        // Bien si es un 6
        case 6:
            echo "Bien";
            break;
        // Suficiente si es un 5
        case 5:
            echo "Suficiente";
            break;
        // Suspenso, si es 1,2,3 ó 4
        default:
            echo "Suspenso";
            break;
    }
    // Utiliza la bifurcación múltiple o switch y comprueba que la nota esté en el rango adecuado de valores permitidos (sea entera y entre 1 y 10)
} else {
    echo "Error: La nota debe ser un número entero entre 1 y 10.";
}
?>