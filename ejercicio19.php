<?php
/* 19- Haz un script PHP en el que conviertas en binario un número natural
decimal */
$decimal = 45;

if (is_int($decimal) && $decimal >= 0) {
    $temp = $decimal;
    $binario = [];
    
    if ($temp == 0) {
        array_push($binario, 0);
    }
    
    while ($temp > 0) {
        array_push($binario, $temp % 2);
        $temp = intdiv($temp, 2);
    }
    
    // Invertimos el array y lo unimos en una cadena
    $resultado = implode('', array_reverse($binario));
    echo "El número decimal $decimal en binario es: $resultado";
} else {
    echo "Debe ser un número natural positivo.";
}
?>