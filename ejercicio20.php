<?php
/* 20- Mejora el ejercicio anterior para que se pueda convertir a binario, octal o
hexadecimal */
$decimal = 255;
$base = 16; // Las opciones que he hecho son: 2, que es binario, 8, que es octal, y 16, que es hexadecimal

if (is_int($decimal) && $decimal >= 0 && in_array($base, [2, 8, 16])) {
    $temp = $decimal;
    $resultado = [];
    
    do {
        $resto = $temp % $base;
        
        switch ($base) {
            case 16:
                $digitosHex = "0123456789ABCDEF";
                array_push($resultado, $digitosHex[$resto]);
                break;
            default:
                array_push($resultado, $resto);
                break;
        }
        
        $temp = intdiv($temp, $base);
    } while ($temp > 0);
    
    $cadena_final = implode('', array_reverse($resultado));
    echo "El número decimal $decimal convertido a base $base es: $cadena_final";
} else {
    echo "Datos inválidos para la conversión.";
}
?>