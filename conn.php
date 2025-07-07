<?php 

$host = getenv('DATABASE_HOST') ?: 'localhost';
$user = getenv('DATABASE_USER') ?: 'root';
$pass = getenv('DATABASE_PASSWORD') ?: '';
$db   = getenv('DATABASE_NAME') ?: 'cee_db';
$conn = null;

try {
    $conn = new PDO("mysql:host={$host};dbname={$db};charset=utf8mb4", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}


 ?>