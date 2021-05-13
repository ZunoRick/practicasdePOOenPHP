<?php include 'includes/header.php';

$username = 'root';
$passwd = 'root';   
$dbname = 'bienes_raices';
$host = 'localhost';
$dbname = 'bienes_raices';
$port = 3310;

//Conectar a la BD con PDO
$db = new PDO("mysql:host=${host};dbname=${dbname};charset=UTF8;port=${port}", $username, $passwd);

//Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

//Lopreparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Obtener los resultados
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC );

//Iterar
foreach ($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";
endforeach;

include 'includes/footer.php';