<?php include 'includes/header.php';

//Conectar a la BD con MySQLi
$username = 'root';
$passwd = 'root';   
$dbname = 'bienes_raices';
$host = 'localhost';
$dbname = 'bienes_raices';
$port = 3310;

$db = new mysqli($host, $username, $passwd, $dbname, $port);

//Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

//Lo preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt -> execute();

//Creamos la variable
$stmt->bind_result($titulo, $imagen);

// //Asignamos el resultado
// $stmt->fetch();

// //Imprimir el resultado
// var_dump($titulo);
// var_dump($imagen);

while ($stmt->fetch()):
    echo "<pre>";
    var_dump($titulo);
    var_dump($imagen);
    echo "</pre>";
endwhile;

include 'includes/footer.php';