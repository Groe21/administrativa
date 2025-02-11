<?php
$host = 'localhost';
$dbname = 'nombre_de_tu_base_de_datos';
$user = 'tu_usuario';
$password = 'tu_contraseña';

try {
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>