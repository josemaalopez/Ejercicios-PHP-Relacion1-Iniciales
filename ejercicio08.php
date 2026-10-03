<?php
/* 8- Crea en un script PHP dos arrays asociativos paralelos, uno con la rúbrica de
4 calificaciones (inicial, primera, segunda y tercera) y otro con las notas
particulares de una persona. A continuación, computará la nota final de esa
persona, y muéstrala por pantalla. */
$rubrica = [
    "inicial" => 0.10,
    "primera" => 0.20,
    "segunda" => 0.30,
    "tercera" => 0.40  // es el porcentaje, este es un 40%
];

$notas = [
    "inicial" => 7.0,
    "primera" => 6.5,
    "segunda" => 8.0,
    "tercera" => 9.0
];

$nota_final = 0;

foreach ($rubrica as $fase => $peso_nota) {
    $nota_final += $notas[$fase] * $peso_nota;
}

echo "La nota final es: " . $nota_final;
?>