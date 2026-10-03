<?php
/* 6- Declara en un programa PHP una clase fruta, con dos atributos: nombre y
color, y dos funciones, set_name() y get_name(). Declara e inicializa dos
instancias: apple y banana, inicializa los nombres y muéstralos por pantalla */
class Fruta {
    public $nombre;
    public $color;

    public function set_name($nombre) {
        $this->nombre = $nombre;
    }

    public function get_name() {
        return $this->nombre;
    }
}

$apple = new Fruta();
$apple->set_name("Manzana");

$banana = new Fruta();
$banana->set_name("Plátano");

echo "Instancia 1: " . $apple->get_name() . "<br>";
echo "Instancia 2: " . $banana->get_name() . "<br>";
?>