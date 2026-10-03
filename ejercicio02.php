<?php
/* 2- Haz un programa PHP que muestre un valor de ejemplo de cada tipo de
dato escalar en php con echo utilizando la función var_dump(), y también
con printf formateado.
Prueba diversas posibilidades de formateo de salida tal y como vienen
descritas en: https://www.w3schools.com/php/func_string_printf.asp */
$booleano = true;
$entero = 42;
$decimal = 3.141592;
$cadena = "PHP";

echo "<h3>Salida con var_dump()</h3>";
var_dump($booleano, $entero, $decimal, $cadena);

echo "<h3>Salida con printf()</h3>";
printf("Booleano: %d <br>", $booleano);
printf("Entero: %d <br>", $entero);
printf("Flotante: %.2f <br>", $decimal);
printf("Cadena: %s <br>", $cadena);
?>