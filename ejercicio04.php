<?php
// 4- En un programa PHP, declara un array constante en el que se almacenarán los días de la semana.
define("DIAS_SEMANA", ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"]);

// Muestra por pantalla:
// el primer dia de la semana
echo "Primer día: " . DIAS_SEMANA[0] . "<br><br>";

// todos los días secuencialmente
echo "Días secuencialmente: ";
for ($i = 0; $i < count(DIAS_SEMANA); $i++) {
    echo DIAS_SEMANA[$i] . " ";
}

// lo mismo que el anterior, pero en formato de lista numerada
echo "<ol>";
for ($i = 0; $i < count(DIAS_SEMANA); $i++) {
    echo "<li>" . DIAS_SEMANA[$i] . "</li>";
}
echo "</ol>";
?>