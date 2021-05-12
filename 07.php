<?php

use Automovil as GlobalAutomovil;

include 'includes/header.php';


//Polimorfismo

interface TransporteInterfaz{
    public function GetInfo() : string;
    public function GetRuedas() : int;
}

class Transporte implements TransporteInterfaz{
    public function __construct(protected int $ruedas, protected int $capacidad) {
        
    }

    public function GetInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas.";
    }

    public function GetRuedas() : int {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color) {
        
    }

    public function GetInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y tiene el color: " . $this->color;
    }

    public function GetColor() : string
    {
        return "El color es: ".$this->color;
    }
}

echo "<pre>";
var_dump($transporte = new Transporte(4,4));
var_dump($auto = new Automovil(4,4, 'rojo'));
echo "</pre>";

echo $auto->GetColor();

include 'includes/footer.php';