<?php 
echo "hool";
function mostar_impares(){
    $frase = "A quien madruga Dios
le ayuda";
    $array_frase = explode(" ", $frase);
    foreach($array_frase as $palabra){
        if(strlen($palabra) % 2 != 0){
            echo $palabra . "<br>";
        }
    }
}

?>