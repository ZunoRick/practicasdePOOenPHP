<?php 
declare ( strict_types = 1);
include 'includes/header.php';

//Definir una clase
class Producto{
    /*public $nombre, $precio, $disponible;
    public function __construct(string $nombre, int $precio, bool $disponible) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }*/
    
    //Instanciar un objeto Versión PHP8
    public function __construct(public string $nombre, public int $precio, public bool $disponible){

    }

    public function MostrarProducto() {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
}

$producto = new Producto('Tablet', 1500, true);
$producto->MostrarProducto();

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 3000, true);
$producto2->MostrarProducto();

include 'includes/footer.php';