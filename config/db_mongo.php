<?php
    require 'vendor/autoload.php';
    $cliente = new MongoDB\Client("mongodb+srv://usuario:password@cluster.mongodb.net/");
    $db = $cliente->mi_tienda_hadware;
?>