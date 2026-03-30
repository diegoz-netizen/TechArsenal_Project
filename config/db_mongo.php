<?php
require_once __DIR__ . '/../vendor/autoload.php';
// El dotenv ya se cargó en el archivo anterior o pueden cargarlo aquí también

$cliente = new MongoDB\Client($_ENV['MONGO_URI']);
$db = $cliente->tech_arsenal;
?>