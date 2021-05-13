<?php include 'includes/header.php';

//Incluir las otras clases
// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes;
use App\Detalles;

function MiAutoload($clase)
{   
    $partes = explode('\\', $clase);
    require __DIR__.'/clases/'. $partes[1] .'.php';
}

spl_autoload_register('MiAutoload');

$detalles = new Detalles();
$clienter = new Clientes();

include 'includes/footer.php';