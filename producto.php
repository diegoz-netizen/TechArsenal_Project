<?php
// 1. Conexión a MongoDB (Usando el Driver de PHP para MongoDB)
require 'vendor/autoload.php'; // Necesitas instalar 'mongodb/mongodb' vía composer

$cliente = new MongoDB\Client("tu_cadena_de_conexion_de_atlas");
$coleccion = $cliente->tech_arsenal->productos;

// 2. Capturar el ID de la URL
$id_producto = $_GET['id'];

// 3. Buscar el documento en la colección de Mongo
// MongoDB usa BSON\ObjectId para los IDs
$producto = $coleccion->findOne(['_id' => new MongoDB\BSON\ObjectId($id_producto)]);

if (!$producto) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $producto['nombre']; ?> | Tech Arsenal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#09090b] text-white">
    <main class="max-w-7xl mx-auto p-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="rounded-2xl overflow-hidden border border-zinc-800">
                <img src="<?php echo $producto['imagen_url']; ?>" class="w-full object-cover">
            </div>

            <div class="space-y-6">
                <h1 class="text-5xl font-black uppercase italic"><?php echo $producto['nombre']; ?></h1>
                <p class="text-4xl font-bold text-cyan-400">$<?php echo $producto['precio']; ?></p>
                
                <div class="bg-zinc-900/50 p-6 rounded-xl border border-zinc-800">
                    <h3 class="text-cyan-400 font-bold uppercase text-xs mb-4">Ficha Técnica (Desde MongoDB)</h3>
                    <ul class="space-y-2">
                        <?php 
                        // Como en MongoDB los campos son dinámicos, podemos recorrerlos todos
                        foreach ($producto['especificaciones'] as $key => $value) {
                            echo "<li class='text-sm text-zinc-400'><span class='text-zinc-100 font-bold'>$key:</span> $value</li>";
                        }
                        ?>
                    </ul>
                </div>

                <button class="w-full py-4 bg-white text-black font-black uppercase hover:bg-cyan-400 transition">
                    Añadir al Carrito
                </button>
            </div>
        </div>
    </main>
</body>
</html>