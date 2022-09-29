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

  function set_year($year) {
    $this->year = $year;
  }
  function get_year() {
    return $this->year;
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

?>
}
?>

</body>
</html>