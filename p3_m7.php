<!DOCTYPE html>
<html>
<body>

<?php
class vehicle {

    //atributos
    public $marca;
    public $modelo;
    public $year;
    public $color;
    public $precio;

    function __construct() {
    }

    function __construct1($marca, $precio) {
        $this->marca = $marca;
        $this->precio = $precio;
    }

    function __construct2($marca, $modelo, $year, $color, $precio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->year = $year;
        $this->color = $color;
        $this->precio = $precio;
    }
}   
?>
</body>
</html>