<?php
// listar.php

$directorio = __DIR__ . "/descargas/";
$archivos = [];

// Abrir carpeta y recorrerla
if (is_dir($directorio)) {
    if ($gestor = opendir($directorio)) {
        while (($archivo = readdir($gestor)) !== false) {
            if ($archivo != "." && $archivo != "..") {
                $archivos[] = $archivo;
            }
        }
        closedir($gestor);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de archivos</title>
</head>
<body>
    <h1>Archivos disponibles</h1>

    <?php if (count($archivos) > 0): ?>
        <ul>
            <?php foreach ($archivos as $archivo): ?>
                <li><a href="descargas/<?= urlencode($archivo) ?>" download><?= htmlspecialchars($archivo) ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay archivos subidos.</p>
    <?php endif; ?>

    <p><a href="subir.php">Subir un archivo</a></p>
    <p><a href="index.php">Volver a inicio</a></p>
</body>
</html>
