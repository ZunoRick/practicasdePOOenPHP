<?php include 'includes/header.php';

//Herencia

//Clase Principal:
class Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad) {
        
    }

    public function GetInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas.";
    }

    public function GetRuedas() : int {
        return $this->ruedas;
    }
}

//Subclase:
class Bicicleta extends Transporte {
    public function GetInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y no gasta gasolina";
    }
}

class Automovil extends Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision) {
        
    }

    public function GetTransmision() : string
    {
        return $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->GetInfo();
echo $bicicleta->GetRuedas();

echo "<hr>";

$auto = new Automovil(4, 4, 'Manual');
echo $auto->GetInfo();
echo $auto->GetTransmision();

include 'includes/footer.php';