<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $valorseleccionado = $_POST['signo'];
      echo "La opción seleccionada fue: " . $valorseleccionado;
    
  
}



?>