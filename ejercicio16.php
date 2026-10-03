<?php
/* 16- Haz un programa que muestre todos los divisores de un número entero y
positivo. Irá mostrando cada número que se prueba y si resulta ser divisor,
aparecerá marcado visiblemente, por ejemplo con otro color. Por ejemplo:
Divisores de 10: 1 2 3 4 5 6 7 8 9 10*/
$numero = 12;

if (is_int($numero) && $numero > 0) {
    $contador = 1;
    echo "Divisores de $numero:<br>";
    
    while ($contador <= $numero) {
        if ($numero % $contador == 0) {
            echo "<span style='color: green; font-weight: bold; font-size: 1.2em;'>$contador</span> ";
        } else {
            echo "$contador ";
        }
        $contador++;
    }
} else {
    echo "Debe ser un número entero positivo.";
}
?>