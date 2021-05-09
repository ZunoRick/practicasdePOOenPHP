<?php 
declare ( strict_types = 1);

use Producto as GlobalProducto;

include 'includes/header.php';

//Métodos estáticos


class Producto{
    public $imagen;
    public static $imagenPlaceholder = "Imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen){
        if ($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto(){
        return self::$imagenPlaceholder;
    }

    //Al ser una función estatica no requiere instanciarse
    public static function obtenerProducto() : void{
        echo "Obteniendo datos del producto...";
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

$producto = new Producto('Tablet', 1500, true, '');
echo $producto->obtenerImagenProducto();

// echo "<pre>";
// var_dump($producto);
// echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 3000, true, 'monitorCurvo.jpg');
echo $producto->obtenerImagenProducto();

include 'includes/footer.php';