<?php

// Serie Fibbonacci

$num1 = 0;
$num2 = 1;

echo "$num1, $num2, ";
for($recuento=0; $recuento < 50; $recuento++){
	$resultado = $num1 + $num2;
	echo $resultado;
	echo ", ";
	$num1 = $num2;
	$num2 = $resultado;
}

?>