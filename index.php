<?php

$aleatorio = rand(1, 20);

echo "El número es el $aleatorio <br />";

$resultado = 1; 

for($recuento = 1;
	$recuento <= $aleatorio;
	$recuento++){
	
	$resultado = $resultado * $recuento;
	
}

echo "El factorial es el $resultado";

?>