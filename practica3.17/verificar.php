<?php 
include "usuarios.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario =  trim($_POST["usuario"]);  
    $contra  = $_POST["contra"] ?? '';
    if($usuario == "" || $contra ==""){
echo "Todos los campos son obligatorios";
    }

    foreach ($usuarios as $nombre => $password) {
        
        if ($usuario === $nombre && $contra === $password) {
            echo "Login correcto: $usuario";
        }
       
    }
}
?>
