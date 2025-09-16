<?php 

$precio_kg = ["manzana" => 1.75, "platano" => 1.80, "kiwi" => 1.65];

$lista_compra = ["manzana" => 2, "platano" => 3, "kiwi" => 1];

foreach ($precio_kg as $fruta => $precio) {
    echo "El precio del $fruta es $precio €/kg  .<br>";
}
foreach ($lista_compra as $fruta => $cantidad) {
    $precio = $precio_kg[$fruta] * $cantidad;
    echo "De la  $fruta tengo $cantidad kg   .<br>";
}


?>