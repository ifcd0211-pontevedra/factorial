<?php

echo "<table><tbody>";

for ($fila = 1; $fila <=10; $fila ++){
	echo "<tr>";
	
		for($columna = 1; $columna <= 10; $columna++){
		
			echo "<td>";
			echo $fila * $columna;
			echo "</td>";
		
		}
	
	echo "</tr>";
}

echo "</tbody></table>";

?>