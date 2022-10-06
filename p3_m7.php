<!DOCTYPE html>
<html>
<body>

<?php
class vehicle {

    //atributos
    public $marca;
    public $modelo;
    public $caballos;
    public $color;
    public $precio;

    public function __construct() {
    }

    public function __construct1($marca, $precio) {
        $this->marca = $marca;
        $this->precio = $precio;
    }

    public function __construct2( $marca, $modelo, $caballos, $color, $precio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->year = $caballos;
        $this->color = $color;
        $this->precio = $precio;
    }

 // getters and setters
  function set_marca($marca) {
    $this->marca = $marca;
  }
  function get_marca() {
    return $this->marca;
  }

  function set_modelo($modelo) {
    $this->modelo = $modelo;
  }
  function get_modelo() {
    return $this->modelo;
  }

  function set_year($caballos) {
    $this->year = $caballos;
  }
  function get_year() {
    return $this->caballos;
  }

  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }

  function set_precio($precio) {
    $this->precio = $precio;
  }
  function get_precio() {
    return $this->precio;
  }
    public function __toString()
    {
        return self::class. ":" . $this->marca. " " . $this->modelo. " " . $this->caballos. " " . $this->color. " " . $this->marca. " " .precio;
    }

    public static function kmRecorregut(){
        echo "Ha recorregut : " . rand(1,100) . "kilometres";
    }
    public static function vehicleCreat(){
        echo "Modelo: Ferrari, Caballos 400";
    }
}
?>

</body>
</html>