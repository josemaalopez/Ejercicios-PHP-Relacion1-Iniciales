<?php
/* 7- Calcula la nota final de una persona a partir de la media de dos notas
numéricas iniciales, y descontando 0.25 por cada falta sin justificar. Muestra el
resultado por pantalla, indicando si la persona aprueba o suspende. */
$nota1 = 6.5;
$nota2 = 8.0;
$faltas_injustificadas = 3;

$media = ($nota1 + $nota2) / 2;
$descontado = $faltas_injustificadas * 0.25;
$nota_final = $media - $descontado;

echo "Nota final: " . $nota_final . "<br>";

if ($nota_final >= 5) {
    echo "Resultado: <strong>Aprueba</strong>";
} else {
    echo "Resultado: <strong>Suspende</strong>";
}
?>