<?php
// 1- Haz un programa en PHP que muestre el mensaje “Hello world” de diferentes formas:
// como texto plano html
echo "Hello world";

// como un encabezado de nivel 2 html
echo "<h2>Hello world</h2>";

// como un párrafo con estilo: color, tipografía, alineación, etc.
echo "<p style='color: blue; font-family: Arial; text-align: center;'>Hello world</p>";

// con un salto de línea entre hello y world
echo "Hello<br>world<br>";

// añádele la información sobre la instalación php (phpversion() y phpinfo()
echo "Versión de PHP: " . phpversion() . "<br>";

// investiga como mostrar la fecha y la hora del sistema en el momento de la ejecución:
echo "Fecha y hora actual: " . date('Y-m-d H:i:s') . "<br>";
?>