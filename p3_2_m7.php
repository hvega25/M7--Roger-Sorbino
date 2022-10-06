<!DOCTYPE html>
<html>
<body>
<?php
class Comptes
{


    //atributos
    public $compte;
    public $noms;
    public $cognoms;
    public $dinersIn;

    //constructor
    public function __construct($compte, $noms, $cognoms, $dinersIn)
    {

        $this->compte = $compte;
        $this->noms = $noms;
        $this->cognoms = $cognoms;
        $this->dinersIn = $dinersIn;
    }

    // getter y setters
    public function getCompte()
    {
        return $this->compte;
    }

    public function setCompte($compte)
    {
        $this->compte = $compte;
    }

    public function getNoms()
    {
        return $this->noms;
    }

    public function setNoms($noms)
    {
        $this->noms = $noms;
    }

    public function getCognoms()
    {
        return $this->cognoms;
    }

    public function setCognoms($cognoms)
    {
        $this->cognoms = $cognoms;
    }

    public function getDinersIn()
    {
        return $this->dinersIn;
    }

    public function setDinersIn($dinersIn)
    {
        $this->dinersIn = $dinersIn;
    }
    public function __toString()
    {
        return self::class. ":" . $this->compte. " " . $this->noms. " " . $this->cognoms. " " . $this->dinersIn;
    }


    public static function retirarDinero($dinero){
        $dinero = 1500;
    }
    //$compte = new compte(Leonardo, Chavez, 10543); futuro uso para llamar
}
$Comptes = new compte(1500, leonardo, chavez, 50)
?>

</body>
</html>