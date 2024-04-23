<?php
/**
 * Este archivo se encarga de establecer la conexión con la base de datos.
 * 
 * @link https://www.php.net/manual/en/pdo.connections.php Documentación de PDO
 */

$servername = "localhost"; // Declaración de host
$username = "test"; // Nombre de usuario
$password = "12345"; 
$database = "database_name"; // Nombre de la base de datos

try {
    // Crear una nueva conexión
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Método que permite identificar errores para mejor manejo de la app (error handling)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado exitosamente"; 
    
} catch(PDOException $e) {
    echo "La conexión falló: " . $e->getMessage();
}
?>