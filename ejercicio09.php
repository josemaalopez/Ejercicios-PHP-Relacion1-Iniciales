<?php
/* 9- En un programa PHP, valora a partir de los 3 lados de un triángulo si es
equilátero, isósceles y escaleno, y muestra esa valoración por pantalla */
$lado1 = 5;
$lado2 = 5;
$lado3 = 8;

if ($lado1 == $lado2 && $lado2 == $lado3) {
    echo "El triángulo es equilátero.";
} elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
    echo "El triángulo es isósceles.";
} else {
    echo "El triángulo es escaleno.";
}
?>