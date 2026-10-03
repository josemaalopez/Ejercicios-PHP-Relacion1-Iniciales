<?php
/* 5- Crea un array asociativo constante, en el que utilices como clave el día de la
semana, y como valor, la temperatura máxima de ese día en formato real. A
continuación, muestra: */
// la temperatura del primer dia de la semana
define("TEMPERATURAS", [
    "Lunes" => 22.5, "Martes" => 24.1, "Miércoles" => 20.3, 
    "Jueves" => 23.0, "Viernes" => 25.4, "Sábado" => 26.8, "Domingo" => 27.2
]);

$dias = array_keys(TEMPERATURAS);
echo "Temperatura del primer día (" . $dias[0] . "): " . TEMPERATURAS[$dias[0]] . "°C<br><br>";

// la temperatura de todos los días, secuencialmente
$suma_temperaturas = 0;

echo "Secuencial: ";
foreach (TEMPERATURAS as $dia => $temp) {
    echo "$temp ";
    $suma_temperaturas += $temp;
}
echo "<br>Suma total acumulada: $suma_temperaturas <br>";

// lo mismo que el anterior, pero en formato de lista numerada
echo "<ol>";
foreach (TEMPERATURAS as $dia => $temp) {
    echo "<li>$dia: $temp °C</li>";
}
echo "</ol>";

// idem, en forma de tabla
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
echo "<tr><th>Día</th><th>Temperatura (°C)</th></tr>";
foreach (TEMPERATURAS as $dia => $temp) {
    echo "<tr><td>$dia</td><td>$temp</td></tr>";
}
echo "</table>";
?>