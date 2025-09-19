<?php 
include "usuarios.php";
$archivo = fopen("acceso.txt", "a");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario =  trim($_POST["usuario"]);  
    $contra  = $_POST["contra"] ?? '';
    if($usuario == "" || $contra ==""){
        $mensaje=  "Todos los campos son obligatorios";
        fwrite($archivo, date("Y-m-d H:i:s") . " - Intento fallido: Campos vacíos\n");
        header("location: login.php?mensaje=$mensaje");
        exit();

    }

    if(isset($usuarios[$usuario]) && $usuarios[$usuario] == $contra){
    
            fwrite($archivo, date("Y-m-d H:i:s") . " Usuario i contraseña correctos\n" );
            header("Location: ok.php");
            exit;
    }
        else{
             fwrite($archivo, date("Y-m-d H:i:s") . " Usuario i contraseña incorrectes\n
             ");
 
             header("Location: error.html");
             exit;
        
       
    }
}
?>