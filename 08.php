<?php include 'includes/header.php';

//Incluir las otras clases
require 'clases/Clientes.php';
require 'clases/Detalles.php';

function MiAutoload($clase)
{
    require __DIR__.'/clases/'.$clase.'.php';
}

spl_autoload_register('MiAutoload');

$detalles = new Detalles();
$clienter = new Clientes();

include 'includes/footer.php';