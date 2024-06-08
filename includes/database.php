<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = '';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

try{
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password, $options);
}
catch(PDOException $e) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . $e->getMessage();
    
    exit;
}
