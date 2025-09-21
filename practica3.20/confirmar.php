<?php
// confirmar.php

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["archivo"])) {
    $directorio = __DIR__ . "/descargas/";
    $archivo = basename($_FILES["archivo"]["name"]);
    $rutaDestino = $directorio . $archivo;

    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $rutaDestino)) {
        $mensaje = "El archivo <strong>$archivo</strong> ha sido subido correctamente.";
    } else {
        $mensaje = "Hubo un error al subir el archivo.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmación</title>
</head>
<body>
    <h1>Confirmación de subida</h1>
    <p><?= $mensaje ?></p>
    <p><a href="subir.php">Subir otro archivo</a></p>
    <p><a href="listar.php">Ver archivos disponibles</a></p>
</body>
</html>
