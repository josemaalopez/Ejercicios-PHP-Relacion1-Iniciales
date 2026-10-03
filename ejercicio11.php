<?php
/* 11- Mejora el intento anterior para que si alguno de los coeficientes a, b o c
fuera 0, el programa gestione el cálculo de resultados de manera más
adecuada: */
$a = 0;
$b = 4;
$c = -16;

if ($a == 0 && $b != 0) {
    // Si a=0, la ecuación no es de segundo grado, solo hay una raíz: x =-c/b
    $x = -$c / $b;
    echo "La ecuación no es de segundo grado. Una raíz: x = $x";
} elseif ($b == 0 && $a != 0) {
    // Si b=0, las raíces se calculan de manera más sencilla: x1=-sqrt(-c/a) y x2=sqrt(-c/a)
    $rad = -$c / $a;
    if ($rad >= 0) {
        $x1 = sqrt($rad);
        $x2 = -sqrt($rad);
        echo "Raíces simplificadas: x1 = $x1 y x2 = $x2";
    } else {
        echo "Sin raíces reales.";
    }
} elseif ($c == 0 && $a != 0) {
    // Si c=0, las raíces son, sacando factor común: x(ax+b)=0: x1=0 y x2=-b/a
    $x1 = 0;
    $x2 = -$b / $a;
    echo "Raíces por factor común: x1 = $x1 y x2 = $x2";
} elseif ($a != 0) {
    // ecuación completa
    $disc = ($b ** 2) - (4 * $a * $c);
    if ($disc >= 0) {
        $x1 = (-$b + sqrt($disc)) / (2 * $a);
        $x2 = (-$b - sqrt($disc)) / (2 * $a);
        echo "Raíces completas: x1 = $x1 y x2 = $x2";
    } else {
        echo "Sin raíces reales.";
    }
} else {
    echo "Coeficientes inválidos (0 = 0)";
}
?>