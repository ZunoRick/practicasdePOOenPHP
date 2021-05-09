<?php 
declare ( strict_types = 1);
include 'includes/header.php';

//Encapsulación


class Producto{
    //Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    //Protected - Se puede acceder / modificar unicamente en la clase
    //Private - Solo miembros de la misma clase pueden acceder a el

    public function __construct(protected string $nombre, public int $precio, public bool $disponible){

    }

    public function MostrarProducto() : void {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function GetNombre() : string{
        return $this->nombre;
    }

    public function SetNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 1500, true);
echo $producto->GetNombre();
$producto->SetNombre("Laptop");
echo $producto->GetNombre();

// echo "<pre>";
// var_dump($producto);
// echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 3000, true);

include 'includes/footer.php';