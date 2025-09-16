<?php 

$cadena = "El perro de San Roque no tiene rabo";

echo "Las letras totales de la frase son: " . strlen($cadena) . "<br>";
echo "Las palabras totales de la frase son: " . str_word_count($cadena) . "<br>";
echo "Cuenta espacios en blanco: " . substr_count($cadena, " ") . "<br>";


$palabras = explode(" ", $cadena);
foreach ($palabras as $palabra) {
    echo $palabra . " " . strlen($palabra) . "      letras" . "<br>";
}

?>
