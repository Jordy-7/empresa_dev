<?php
$host = 'localhost';
$db = 'empresa_dev';
$user = 'root'; // Cambia esto si usas otro usuario
$pass = ''; // Cambia esto si usas otra contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
