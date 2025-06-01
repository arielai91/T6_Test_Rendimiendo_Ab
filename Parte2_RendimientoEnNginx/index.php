<?php

$start = microtime(true);


$empleados = [
    ['nombre' => 'Luis', 'salario' => 38409],
    ['nombre' => 'Ana', 'salario' => 31644],
    ['nombre' => 'Carlos', 'salario' => 55876],
];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mini Demo PHP</title>
    <style>
        body { font-family: Arial; padding: 2rem; }
        .info { margin-bottom: 1rem; }
        h1 { color: #333; }
        ul { list-style: square; }
    </style>
</head>
<body>
    <div class="info">
        <strong>Este nodo es:</strong> <?php echo gethostname(); ?><br>
        <strong>Servidor:</strong> <?php echo $_SERVER['SERVER_NAME'] ?? 'localhost'; ?><br>
        <strong>PHP:</strong> <?php echo PHP_VERSION; ?>
    </div>

    <h1>👥 Empleados</h1>
    <ul>
        <?php foreach ($empleados as $e): ?>
            <li><?php echo $e['nombre'] . ' - $' . number_format($e['salario']); ?></li>
        <?php endforeach; ?>
    </ul>

    <p>⏱️ Tiempo ejecución: <?php echo round((microtime(true) - $start) * 1000, 2); ?>ms</p>
</body>
</html>
