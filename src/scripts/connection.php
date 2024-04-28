<?php
/**
 * Este archivo se encarga de establecer la conexión con la base de datos.
 * 
 * @link https://www.php.net/manual/en/pdo.connections.php Documentación de PDO
 */

$servername = "localhost"; // Declaración de host
$username = "lansan69"; // Nombre de usuario
$password = "SanGom69*"; 
$database = "lede"; // Nombre de la base de datos

try {
    // Crear una nueva conexión
    $conn = new PDO("mysql:host=$servername;port=3307;dbname=$database", $username, $password);

    // Método que permite identificar errores para mejor manejo de la app (error handling)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "success";
    
} catch(PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}
?>