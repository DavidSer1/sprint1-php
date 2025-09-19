<?php 
include "usuarios.php";
$archivo = fopen("acceso.txt", "a");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario =  trim($_POST["usuario"]);  
    $contra  = $_POST["contra"] ?? '';
    if($usuario == "" || $contra ==""){
echo "Todos los campos son obligatorios";
 fwrite($archivo, date("Y-m-d H:i:s") . " - Intento fallido: Campos vacíos");

    }

    foreach ($usuarios as $nombre => $password) {
        if ($usuario === $nombre && $contra === $password) {
          
          
           header("Location: ok.php");
        }
        else{
             fwrite($archivo, date("Y-m-d H:i:s") . " Usuario i contraseña incorrectes");
             fclose($archivo);
             header("Location: error.html");
        }
       
    }
}
?>