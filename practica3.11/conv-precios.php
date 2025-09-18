<?php 

function pesetas_a_euros($pesetas){
$cantidad = $pesetas /166.368;
echo number_format($cantidad,3) ;
return $cantidad;
}

function euros_a_pesetas($euros){
$cantidad = $euros * 166.368;
echo "<br>";
echo $cantidad;
return $cantidad;

}
?>