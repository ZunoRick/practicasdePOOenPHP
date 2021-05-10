<?php include 'includes/header.php';


//Interfaces: permiten agrupar un grupo de declaraciones de funciones pero sin implementar

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

include 'includes/footer.php';