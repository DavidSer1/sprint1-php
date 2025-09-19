<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="verificar.php" method ="POST">
<label for="usuario">Usuario</label>
<input type="text" name="usuario" id="usuario">
<label for="contra">    Contraseña</label>
<input type="password" name="contra" id="contra">
<button type="submit">Enviar</button>
    </form>

<?php
if (isset($_GET['mensaje'])){
    echo $_GET['mensaje'];
    
}
?>
    
</body>
</html>