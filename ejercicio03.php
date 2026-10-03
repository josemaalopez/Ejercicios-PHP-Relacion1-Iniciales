<?php
/* 3- Investiga qué y cuales son las superglobals en php, y haz
un programa que muestre, en forma de lista no numerada, para la superglobal
$_SERVER los valores de ... */
$claves_server = [
    'DOCUMENT_ROOT', 'PHP_SELF', 'SERVER_NAME', 'SERVER_SOFTWARE', 
    'SERVER_PROTOCOL', 'HTTP_HOST', 'HTTP_USER_AGENT', 'REMOTE_ADDR', 
    'REMOTE_PORT', 'SCRIPT_FILENAME', 'REQUEST_URI'
];

echo "<ul>";
foreach ($claves_server as $clave) {
    $valor = $_SERVER[$clave] ?? 'No disponible';
    echo "<li><strong>$clave:</strong> $valor</li>";
}
echo "</ul>";

/* 
Diferencia entre var_dump y print_r según he buscado en GOogle:
- El var_dump($_SERVER) muestra el tipo de dato, la longitud de las cadenas y el valor. Esta muy bien para hacer depuración tocha.
- En cambio, el print_r($_SERVER) muestra la estructura del array y sus valores de forma más facil de leer y limpia, sin información estricta de los tipos.
*/
?>